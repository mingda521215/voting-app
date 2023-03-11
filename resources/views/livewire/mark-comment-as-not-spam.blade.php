<x-modal-confirm
     livewire-event-to-open-modal="markAsNotSpamCommentWasSet"
     event-to-close-modal="commentWasMarkedAsNotSpam"
     modal-title="{{ __('Reset Comment Spam Counter') }}"
     modal-description="{{ __('Are you sure you want to mark this comment as NOT spam? This will reset the spam counter to 0.' )}}"
     modal-confirm-button-text="{{ __('Reset Spam Counter') }}"
     wire-click="markAsNotSpam"
 />
