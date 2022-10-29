# Submit Button component
This component give you html with tailwind classes when you need to show form-buttons to your project.


You just need to copy below tag and paste at place you want to show form-buttons,

```html
<x-buttons.submit-button>
    <x-slot name="submitBtn">
        <x-buttons.button>
            Submit
        </x-buttons.button>
    </x-slot>

    <x-slot name="cancelBtn">
        <x-buttons.button>
            Cancel
        </x-buttons.button>
    </x-slot>
</x-buttons.submit-button>
```

Go to [Documentation](../README.md)