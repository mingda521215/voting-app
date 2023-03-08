<x-modal-confirm
    livewire-event-to-open-modal="deleteCommentWasSet"
    event-to-close-modal="commentWasDeleted"
    modal-title="{{ __('Delete Comment') }}"
    modal-description="{{ __('Are you sure you want to delete this comment? This action cannot be undone.') }}"
    modal-confirm-button-text="{{ __('Delete') }}"
    wire-click="deleteComment"
/>