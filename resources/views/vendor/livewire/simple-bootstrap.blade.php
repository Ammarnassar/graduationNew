<div>
    @if ($paginator->hasPages())
        <nav>
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" style="font-size: 13px;margin-top:2px;">
                        <span class="page-link"  style="background-color: #f5fbff;border: none;font-size: 18px;border-radius: 4px"><i class="ri-arrow-left-s-line"></i> </span>
                    </li>
                @else
                    <li class="page-item" style="font-size: 13px;margin-top:2px;border-radius: 4px">
                        <button type="button" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev" style="background-color: #f5fbff;border: none;font-size: 18px;border-radius: 4px"><i class="ri-arrow-left-s-line"></i> </button>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item" style="font-size: 13px;margin-top:2px;border-radius: 4px">
                        <button type="button" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next"  style="background-color: #f5fbff;border: none;font-size: 18px;border-radius: 4px"><i class="ri-arrow-right-s-line"></i> </button>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true" style="font-size: 13px;margin-top:2px;">
                        <span class="page-link"  style="background-color: #f5fbff;border: none;font-size: 18px;border-radius: 4px"><i class="ri-arrow-right-s-line"></i> </span>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>
