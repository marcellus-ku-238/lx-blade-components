# Modal component
This component give you html with tailwind classes when you need to show modal to your project.


You just need to copy below tag and paste at place you want to show modal,

```php
<x-modal :position="'top-right'" :show="false">
    <x-slot name="header">
        <x-modal.header :show="true">Terms of Service</x-modal.header>
    </x-slot>
    <x-slot name="content">
        <x-modal.content>
            With less than a month to go before the European Union enacts new consumer privacy
            laws for its citizens, companies around the world are updating their terms of
            service agreements to comply.

            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect
            on May 25 and is meant to ensure a common set of data rights in the European Union.
            It requires organizations to notify users as soon as possible of high-risk data
            breaches that could personally affect them.
        </x-modal.content>
    </x-slot>
    <x-slot name="footer">
        <x-modal.footer>
            <x-buttons.button>I accept</x-buttons.button>
        </x-modal.footer>
    </x-slot>
</x-modal>
```

| Support     |                                                                      |
|---------------|:--------------------------------------------------------------------:|
| Positions     | `Top-left`, `Top-right`, `Bottom-left`, `Bottom-right` and `center`. |
| Sizes         | `sm`, `md`, `lg` and `xl`                                            |
|---------------|:--------------------------------------------------------------------:|

Go to [Documentation](../README.md)