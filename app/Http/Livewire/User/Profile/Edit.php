<?php

namespace App\Http\Livewire\User\Profile;

use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Edit extends Component
{
    use LivewireAlert;

    public $college;
    public $first_name;
    public $last_name;
    public $university;
    public $lang;
    public $dob;
    public $city;
    public $age;
    public $address;
    public $gender;
    public $username;
    public $email;
    public $current_password;
    public $password;
    public $password_confirmation;

    protected $listeners = [
        'confirmedDeleteAccount',
    ];

    public $personalInformation = [
        'first_name',
        'last_name',
        'age',
        'dob',
        'city',
        'address',
        'gender',
        'university',
        'college',
    ];

    public $otherInformation = [
        'lang',
        'username',
        'email',
    ];

    public function resetData()
    {
        $this->mount();
    }

    public function mount()
    {
        $this->university = auth()->user()->university;
        $this->college = auth()->user()->college;
        $this->dob = auth()->user()->dob;
        $this->city = auth()->user()->city;
        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
        $this->age = auth()->user()->age;
        $this->address = auth()->user()->address;
        $this->gender = auth()->user()->gender;
        $this->username = auth()->user()->username;
        $this->email = auth()->user()->email;

    }

    public function render()
    {
        return view('livewire.user.profile.edit',
            [
                'universities' => array_keys(config('universities.data')),
                'cities' => config('cities.data'),
                'colleges' => config('universities.data.' . $this->university . '.colleges'),
            ]);
    }

    public function savePersonalInfo()
    {
        $validated = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'dob' => 'required',
            'city' => 'required',
            'address' => 'nullable|string',
            'gender' => 'required',
            'university' => 'required',
            'college' => 'required',
        ]);

        auth()->user()->update($validated);

        if (auth()->user()->wasChanged()) {
            $this->alert(
                'success',
                __('Your Information Updated Successfully !')
            );
        }
    }

    public function confirmedDeleteAccount()
    {
        auth()->user()->delete();

        sleep(3);

        redirect()->route('login');
    }

    public function deleteAccount()
    {
        $this->confirm(
            __('Are You sure to delete you account ?'),
            [
                'toast' => false,
                'position' => 'center',
                'showConfirmButton' => true,
                'confirmButtonText' => __('Confirm'),
                'cancelButtonText' => __('Cancel'),
                'onConfirmed' => 'confirmedDeleteAccount',
                'confirmButtonColor' => '#50b5ff',
            ]);

    }

    public function changeLanguage()
    {
        $this->validateOnly('lang', [
            'lang' => 'required'
        ]);

        App::setLocale($this->lang);

        Session::put('locale', $this->lang);

        LaravelLocalization::setLocale($this->lang);

        $url = LaravelLocalization::getLocalizedURL(App::getLocale(), URL::previous());

        return redirect()->to($url);
    }

    public function saveAccountSettings()
    {
        $validated = $this->validate([
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'username' => 'required|unique:users,email'
        ]);

        auth()->user()->update($validated);

        if (auth()->user()->wasChanged()) {
            $this->alert(
                'success',
                __('Your Information Updated Successfully !')
            );
        }

    }

    public function changePassword()
    {
        $this->validate([
            'current_password' => ['required', new MatchOldPassword],
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        auth()->user()->update([
            'password' => bcrypt($this->password)
        ]);

        if (auth()->user()->wasChanged()) {
            $this->alert(
                'success',
                __('Your Password Updated Successfully !')
            );
        }

    }

}
