# horde-mvc
Horde_Mvc is library package to facilitate Horde applications in Model View Controller style, attempting to use as few coupling and assumptions as possible. It is inspired by Horde_Form for validation, Horde_Rdo as a standin for a Horde Model class and Horde_View for a presentation layer.

INTENTIONS
Don't break any existing code in Horde 5.2 and don't require or block any version upgrades of existing libraries

Provide a tool set to quickly define business logic Models and Entities
* composed dynamically out of Fields with Field_Types and
* Model-wide validations and field-wide validations
* provide default adapters to Rdo/Sql backend without cluttering business logic / model
* make models reusable enough to maybe proxy them into RPC Apis without much manual coding
* make it easy to wrap existing libraries, apis or drivers into the design but don't force anything

Provide a standard set of Horde_Controllers
* to load and show a Horde_Model_Entity or any subset of Fields
* to create/edit/update Horde_Model_Entities even when only showing partial views, but validating against the complete Model
* but allow completely omitting the controllers
* offer a Horde_Core_Ajax_Application_Handler if no Horde_Controllers are wanted in the context application

Provide a standard representation based on Horde_View
* Allow easily replacing templates, presentation or handling
* Don't enforce any particular dynamic style, be it "load html snippets", "preload & hide", "preload html & fill with json"
* Offer js code to either interact with Horde_Controllers or Horde Ajax Handlers



HISTORY AND DESIGN DECISIONS
There were already several proposals refactor Horde_Forms (Horde_Model project) and to couple Horde_Rdo and Horde_Form to autogenerate CRUD forms (Horde_Rdo_Form in Pre-H4 incubator) etc

Horde_Rdo, while it is a very good ORM library and can be extended into almost anything, is not a good base for a generic Model class
* It exposes a lot of state only relevant to the backend
* Too much tied to Sql backends
* Little support for relations to objects from other backends
* Mappers represent only one table type each - business logic models might compose entities from multiple tables
* Too little meta data to support any meaningful form autogeneration
* Method signatures directly reference base classes instead of interfaces which makes it hard to sustitute parts of the systems

Horde_Form 
* is too much geared towards traditional-mode apps where all fields are validated at once and 
* the interface is very PHP4-ish. 
* Its class and file structure also doesn't go well with autoloading and it mixes too much presentation with validation.
* large usage base, no intent to interfere with it
* Doesn't always look pretty in the standard representation and alternative renderers is arcane knowledge


HOW TO BOOTSTRAP
go to a horde/horde checkout, cd framework, git clone https://github.com/ralflang/horde-mvc Mvc
run php framework/bin/install_dev to link to the new library
