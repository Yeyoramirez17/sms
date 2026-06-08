<x-layouts::app :title="__('Students')">

    <div class='max-w-[90%] mx-auto' x-data="{ openSearch: false }">
        <flux:heading class="my-0" size='xl' level='1'>{{ __('Students') }}</flux:heading>

        <flux:separator class="mt-5" />

        <div class="flex justify-between my-5">
            <flux:button href="{{ route('students.create') }}" variant="primary" icon='plus' color="green">
                {{ __('New Student') }}
            </flux:button>

            <flux:button @click="openSearch = !openSearch" variant="primary" icon='magnifying-glass' color="indigo"
                class="cursor-pointer">
            </flux:button>
        </div>

        <div x-show="openSearch"
            class="flex justify-evenly items-center my-3 gap-3 border-2 border-indigo-300 rounded-lg px-2.5 py-3.5">
            <flux:input size='sm' label='First Name' placeholder='jhon' type='text' />
            <flux:input size='sm' label='Last Name' placeholder='doe' type='text' />
            <flux:input size='sm' label='Email' placeholder='jhon@doe.com' type=email />
            <flux:select size='sm' label='Status'>
                <flux:select.option>{{ __('Active') }}</flux:select.option>
                <flux:select.option>{{ __('Inactive') }}</flux:select.option>
                <flux:select.option>{{ __('Suspended') }}</flux:select.option>
            </flux:select>
            <flux:button class='self-end' size='sm' icon='magnifying-glass' color='indigo'>
                {{ __('Search') }}
            </flux:button>
        </div>

        @if ($students->isEmpty())
            <p>No students found.</p>
        @else
            <div class="mt-4">
                <flux:table>
                    <flux:table.columns>
                        <flux:table.column>{{ __('First Name') }}</flux:table.column>
                        <flux:table.column>{{ __('Last Name') }}</flux:table.column>
                        <flux:table.column sortable>{{ __('Email') }}</flux:table.column>
                        <flux:table.column>{{ __('Status') }}</flux:table.column>
                        <flux:table.column sortable>{{ __('Created At') }}</flux:table.column>
                        <flux:table.column sortable>{{ __('Updated At') }}</flux:table.column>
                        <flux:table.column></flux:table.column>
                    </flux:table.columns>

                    <flux:table.rows>
                        @foreach ($students as $student)
                            <flux:table.row :key="$student->id">
                                <flux:table.cell>{{ $student->firstName }}</flux:table.cell>
                                <flux:table.cell>{{ $student->lastName }}</flux:table.cell>
                                <flux:table.cell>{{ $student->email }}</flux:table.cell>
                                <flux:table.cell>
                                    <flux:badge color="green" size="sm" inset="top bottom">
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

                <flux:pagination :paginator='$students' />
            </div>
        @endif
    </div>
</x-layouts::app>
