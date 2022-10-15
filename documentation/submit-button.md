# Submit Button component
This component give you html with tailwind classes when you need to show form-buttons to your project.


You just need to copy below tag and paste at place you want to show form-buttons,

```bash
<x-lx.buttons.submit-button>
    <x-slot name="submitBtn">
        <x-lx.buttons.button class="font-bold">
            Submit
        </x-lx.buttons.button>
    </x-slot>

    <x-slot name="cancelBtn">
        <x-lx.buttons.button class="font-bold" color="red">
            Cancel
        </x-lx.buttons.button>
    </x-slot>
</x-lx.buttons.submit-button>
```

Go to [Documentation](../README.md)