<x-modal-confirm
     event-to-open-modal="custom-show-mark-idea-as-spam-modal"
     event-to-close-modal="ideaWasMarkedAsSpam"
     modal-title="{{ __('Mark Idea as Spam') }}"
     modal-description="{{ __('Are you sure you want to mark this idea as spam?') }}"
     modal-confirm-button-text="{{ __('Mark as Spam') }}"
     wire-click="markAsSpam"
 />