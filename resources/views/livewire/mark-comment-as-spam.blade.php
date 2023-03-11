<x-modal-confirm
    livewire-event-to-open-modal="markAsSpamCommentWasSet"
    event-to-close-modal="commentWasMarkedAsSpam"
    modal-title="{{ __('Mark Comment as Spam') }}"
    modal-description="{{ __('Are you sure you want to mark this comment as spam?') }}"
    modal-confirm-button-text="{{ __('Mark as Spam') }}"
    wire-click="markAsSpam"
/>
