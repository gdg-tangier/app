# App

### Features to add or alter

- Confirmation of the email after registration to avoid spam
- Organisers of an event or maybe admins shouldn't be allowed to get invitations for events. They just fill the space. ?

### Features to refactor

- If a ticket is not valid. We should store the name and the email for the attendee and generate for him a valid ticket on the fly. Currently, On the ```\views\admin\events\check-in\_invalid.blade.php```. The form send through ```admin.events.attendees.store``` and so the store function in the Controller should be refactored

- The update function of the EventCheckInController should be refactored

- The rule of authorization on the function index of the Controller EventCheckInController should be refactored.
