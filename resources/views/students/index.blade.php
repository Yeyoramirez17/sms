<x-layouts::app :title="__('Students')">

    <div 
        class='max-w-[90%] mx-auto' 
        x-data="{ openSearch: {{ request()->hasAny(['first_name','last_name','email','status']) ? 'true' : 'false' }} }"
    >
        <flux:heading class="my-0" size='xl' level='1'>{{ __('Students') }}</flux:heading>

        <flux:separator class="mt-5" />

        <div class="flex justify-between my-5">
            <flux:button 
                href="{{ route('students.create') }}" 
                variant="primary" 
                icon='plus' 
                color="green"
            >
                {{ __('New Student') }}
            </flux:button>

            <flux:button 
                @click="openSearch = !openSearch"
                x-show="!openSearch" 
                variant="primary" 
                icon='magnifying-glass' 
                color="indigo"
                class="cursor-pointer">
            </flux:button>
            <flux:button 
                @click="openSearch = !openSearch"
                x-show="openSearch" 
                variant="primary" 
                icon='x-circle' 
                color="red"
                class="cursor-pointer">
            </flux:button>
        </div>

        <form 
            method="GET" 
            action="{{ route('students.index') }}" 
            x-show="openSearch"
            x-cloak
            class="flex justify-between items-center mt-3 mb-4 border-2 dark:border-white/20 rounded-lg px-2.5 py-3.5"
            x-transition
        >
            <div class="flex gap-2">
                <flux:input 
                    name="first_name" 
                    size='sm' 
                    label='First Name' 
                    placeholder='jhon' 
                    type='text' 
                    :value="request('first_name')"
                />
                <flux:input 
                    name="last_name" 
                    size='sm' 
                    label='Last Name' 
                    placeholder='doe' 
                    type='text' 
                    :value="request('last_name')"
                />
                <flux:input 
                    name="email" 
                    size='sm' 
                    label='Email' 
                    placeholder='jhon@doe.com' 
                    type='email' 
                    :value="request('email')"
                />
                <flux:select name="status" size='sm' label='Status'>
                    <flux:select.option value="">{{ __('All') }}</flux:select.option>
                    <flux:select.option value="active" selected="{{ request('active') }}"> {{ __('Active')   }}</flux:select.option>
                    <flux:select.option value="inactive">{{ __('Inactive') }}</flux:select.option>
                    <flux:select.option value="suspended">{{ __('Suspended') }}</flux:select.option>
                </flux:select>
            </div>

            <div class="flex gap-2 self-end">
                @if (request()->hasAny(['first_name', 'last_name', 'email', 'status']))
                    <flux:button 
                        size="sm" 
                        variant="primary" 
                        color="red" 
                        icon="x-mark"
                        href="{{ route('students.index') }}"
                    >
                        {{ __('Clear') }}
                    </flux:button>
                @endif
                <flux:button type="submit" size='sm' icon='magnifying-glass' color='indigo'>
                    {{ __('Search') }}
                </flux:button>
            </div>
        </form>

        @if ($students->isEmpty())
            <div class="flex flex-col items-center gap-3">
                <p class="text-gray-500 p-4 border-2 border-gray-500 rounded-md">No students found.</p>
                @if (request()->hasAny(['first_name', 'last_name', 'email', 'status']))
                    <flux:button size="sm" variant="primary" color="red" href="{{ route('students.index') }}" class="mt-3">
                        {{ __('Clear filters') }}
                    </flux:button>
                @endif
            </div>
        @else
            <div class="mt-4">
                <flux:table>
                    <flux:table.columns>
                        <flux:table.column>{{ __('First Name') }}</flux:table.column>
                        <flux:table.column>{{ __('Last Name') }}</flux:table.column>
                        <flux:table.column>{{ __('Email') }}</flux:table.column>
                        <flux:table.column>{{ __('Status') }}</flux:table.column>
                        <flux:table.column>{{ __('Created At') }}</flux:table.column>
                        <flux:table.column>{{ __('Updated At') }}</flux:table.column>
                        <flux:table.column></flux:table.column>
                    </flux:table.columns>

                    <flux:table.rows>
                        @foreach ($students as $student)
                            <flux:table.row :key="$student->id">
                                <flux:table.cell>{{ $student->firstName }}</flux:table.cell>
                                <flux:table.cell>{{ $student->lastName }}</flux:table.cell>
                                <flux:table.cell>{{ $student->email }}</flux:table.cell>
                                <flux:table.cell>
                                    @php
                                        $colorBadge = match ($student->status) {
                                            'active'    => 'green',
                                            'inactive'  => 'zin',
                                            'suspended' => 'red',
                                            default     => 'zinc'
                                        }
                                    @endphp
                                    <flux:badge color="{{ $colorBadge }}" size="sm" inset="top bottom">
                                        {{ $student->status }}
                                    </flux:badge>
                                </flux:table.cell>
                                <flux:table.cell>{{ $student->createdAt->format('Y-m-d') }}</flux:table.cell>
                                <flux:table.cell>{{ $student->updatedAt->format('Y-m-d') }}</flux:table.cell>
                                <flux:table.cell>
                                    <flux:button size='sm' variant="primary" color="indigo" icon="eye"
                                        href="{{ route('students.show', $student->id) }}">
                                        {{ __('Ver') }}
                                    </flux:button>
                                </flux:table.cell>
                            </flux:table.row>
                        @endforeach
                    </flux:table.rows>
                </flux:table>

                <div class="mt-3">
                    {{ $students->links() }}
                </div>
            </div>
        @endif
    </div>
</x-layouts::app>
