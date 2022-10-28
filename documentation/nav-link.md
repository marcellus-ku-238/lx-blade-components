# Nav-link component
This component give you html with tailwind classes when you need to show nav-link to your project.


You just need to copy below tag and paste at place you want to show nav-link,

```html
<x-nav-link href="{{ route('user.index') }}" :active="request()->routeIs('user.index')">
    {{ __('Users') }}
</x-nav-link>
```

Go to [Documentation](../README.md)