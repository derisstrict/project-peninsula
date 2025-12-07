<div>
    <form wire:submit="create">
        {{ $this->form }}
        
        <button type="submit" class="btn-primary p-3 mt-3 ml-auto">
            <x-local-icon icon="tick" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
            </x-local-icon>
            Submit
        </button>
    </form>
    
    <x-filament-actions::modals />
</div>
