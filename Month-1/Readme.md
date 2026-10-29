1) Accessible Rich Internet Applications (ARIA) supplements your HTML when native elements are insufficient. The first rule of ARIA is: If a native HTML element or attribute can do the job, use it instead of ARIA


> CSS ------------------------------ CSS ------------------------------- CSS -------
1) Specificity:
Specificity is the scoring system browsers use to decide which CSS declaration wins when multiple rules target the same element.

2) Cascade:
The Cascade is the algorithm that determines the final value of a CSS property when multiple competing rules have equal importance and specificity.



> JavaScript ----------------------- JavaScript ------------------------- JavaScript
1) DOM Manipulation
- querySelectorAll():-  returns NodeList - Traverse elements by forEach loop
- getElementsByClassName():- returns HTMLCollection - Can't traverse the elements
- getElementsByTagName():- returns HTMLCollection - Can't traverse the elements

2) Events:
- click
An element is clicked

- dblclick
An element is double-clicked

- input
An input's value changes
Live search, character counters

- change
A value is committed or changed
Select menus, checkboxes

- submit
A form is submitted

- keydown
A key is pressed

- keyup
A key is released

- mouseover
Pointer enters an element or descendant

- mouseout
Pointer leaves an element or descendant

- focus
An element receives focus
Input assistance

- blur
An element loses focus

- DOMContentLoaded
HTML has been parsed
Initialize page behavior

> Event bubbling and capturing:
- By default, addEventListener() listens during the bubbling phase. You can request the capturing phase by setting the third argument to true.
- Clicking the button normally prints:
- The capturing listener runs on the way down, before the event reaches the button. The bubbling listener runs on the way back up.

> Eent delegation:
- Event delegation is a technique in which you attach one event listener to a parent element and use it to handle events originating from its child elements.


3) Local Storage:
- LocalStorage is associated with an origin — the combination of protocol, hostname, and port. For example, http://localhost:8000 and http://localhost:8080 have different LocalStorage areas.

4) $.ajax:
url -> The server endpoint
method -> HTTP method such as GET, POST, PUT, or DELETE
data -> Data sent to the server
dataType -> Expected response format
contentType -> Format of the request body
success -> Callback when the request succeeds
error -> Callback when the request fails
complete -> Callback that runs after the request finishes
timeout -> Maximum wait time in milliseconds

> $(this).serialize() is a jQuery method used to convert a set of form input fields into a single URL-encoded text string

Important serialization limitations
1. Inputs need names. An input without a name attribute is omitted.
2. Unchecked checkboxes and radio buttons are omitted.
3. Disabled fields are omitted. A disabled input is not serialized.
4. Files are not included. Use FormData for file uploads.
5. Submit buttons are generally not included. Serialization doesn't automatically represent which submit button initiated the form.
6. Only successful form controls are serialized. This is the HTML form submission concept; it does not mean the values have been validated by your server.

> PHP ---------------------- PHP ------------------- PHP ------------------- PHP
- self: refers to the class where a method is defined.
- static: represents the class called at runtime, supporting late static binding.
- never: means a function will not finish normally, for example because it throws an exception or terminates execution.


> ------- IMP ------------ IMP ------------ IMP ----------- IMP ---------- IMP ---
- - - - Exception:
1. Exception
2. InvalidArgumentException
3. RuntimeException
4. LogicException
5. DomainException
6. LengthException
7. OutOfRangeException

- - - - Errors:
PHP can report problems such as undefined variables, missing files, deprecated functionality, invalid operations, and uncaught exceptions.

- E_ERROR:  Fatal runtime error	Calling a missing function
- E_WARNING:  Runtime warning	Attempting to include a missing file
- E_NOTICE:  Notice, commonly associated with older PHP code	Accessing an undefined variable in versions/configurations where it produces a notice
- E_DEPRECATED:  Use of functionality scheduled for removal	Using a deprecated feature
- E_PARSE:  Syntax parsing failure	Invalid PHP syntax
- E_USER_ERROR:  User-generated fatal error	trigger_error() with E_USER_ERROR
- E_USER_WARNING:  User-generated warning	trigger_error() with E_USER_WARNING


> Autoloading:
is the process of loading a PHP class, interface, trait, or enum file automatically when PHP needs it.

> PSR-4 (PHP Standards Recommendation):
is a PHP-FIG standard that defines how namespaces map to directory structures and class files.

Important PSR standards
- PSR-1  :	Basic coding standard
- PSR-3  :	Logger interface
- PSR-4  :	Autoloading standard
- PSR-7  :	HTTP message interfaces
- PSR-11 :	Container interface
- PSR-12 :	Extended coding style
- PSR-15 :	HTTP server request handlers and middleware
- PSR-16 :	Simple caching interface
