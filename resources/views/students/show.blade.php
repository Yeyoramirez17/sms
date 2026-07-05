<x-layouts::app :title="__('Student') . ' - ' . ($user->firstName ?? '') . ' ' . ($user->lastName ?? '')">

    <flux:heading level="1" size="xl" class="mx-12">
        {{ $user->firstName . ' ' . $user->lastName }}
    </flux:heading>

    <div class="py-6">
        <form method="POST" action="{{ route('students.update', $user->id) }}" enctype="multipart/form-data"
            class="mx-12 flex flex-col gap-2.5">
            @csrf
            @method('PUT')

            <flux:fieldset legend="{{ __('Student Information') }}">
                <div class="grid grid-cols-3 grid-rows-2 items-start gap-x-3 gap-y-5">

                    <flux:input
                        name="first_name"
                        label="{{ __('First Name') }}"
                        value="{{ $user->firstName ?? '' }}" />

                    <flux:input
                        name="last_name"
                        label="{{ __('Last Name') }}"
                        value="{{ $user->lastName ?? '' }}" />

                    <flux:input
                        name="email"
                        label="{{ __('Email') }}"
                        type="email"
                        value="{{ $user->email ?? '' }}" />

                    <flux:select name="status" label="{{ __('Status') }}">
                        <option value="active" @selected(old('status', $user->status) === 'active')>
                            {{ __('Active') }}
                        </option>
                        <option value="inactive" @selected(old('status', $user->status) === 'inactive')>
                            {{ __('Inactive') }}
                        </option>
                        <option value="suspended" @selected(old('status', $user->status) === 'suspended')>
                            {{ __('Suspended') }}
                        </option>
                        <option
                            value="pending_password_change"
                            @selected(old('status', $user->status) === 'pending_password_change')>
                            {{ __('Pending Password Change') }}
                        </option>
                    </flux:select>

                    <div id="photo_control"
                        class="col-start-3 row-span-2 row-start-1 flex flex-col items-start gap-2 self-start"
                        x-data="{
                            imageUrl: '{{ $student->photoPath ?? asset('storage/profile-default.png') }}',
                            hasFile: false,
                            fileName: '',
                            fileSize: '',
                            clear() {
                                this.imageUrl = '{{ $student->photoPath ?? asset('storage/profile-default.png') }}';
                                this.hasFile = false;
                                this.fileName = '';
                                this.fileSize = '';
                                this.$refs.photoInput.value = '';
                            }
                        }">
                        <span class="text-sm font-medium text-zinc-800 dark:text-zinc-200">{{ __('Photo') }}</span>

                        <div class="relative mt-0.5 size-36">
                            <label
                                for="photo_input"
                                class="block size-36 overflow-hidden rounded-xl border border-white/20"
                                :class="hasFile ? 'cursor-default pointer-events-none' : 'cursor-pointer'">
                                <img
                                    id="photo_preview"
                                    class="absolute size-36 object-cover"
                                    :src="imageUrl"
                                    alt="Photo Student" />
                            </label>

                            <flux:button
                                x-show="hasFile"
                                x-cloak
                                @click="clear()"
                                color="red"
                                icon="x-mark"
                                variant="primary"
                                size="xs"
                                class="absolute left-[calc(100%-2rem)] top-1.5 cursor-pointer rounded-xl border-2 border-white/20">
                            </flux:button>
                        </div>

                        <div x-show="hasFile" x-cloak
                            class="flex w-36 flex-col items-start text-left text-[10px] text-zinc-500 dark:text-zinc-400">
                            <span class="w-full truncate font-medium" x-text="fileName"></span>
                            <span x-text="fileSize"></span>
                        </div>

                        <input
                            class="sr-only"
                            id="photo_input"
                            name="photo_path"
                            type="file"
                            x-ref="photoInput"
                            accept="image/*"
                            @change="
                                const file = $event.target.files[0];
                                if (file) {
                                    hasFile = true;
                                    fileName = file.name;
                                    fileSize = file.size > 1048576 ? (file.size / 1048576).toFixed(2) + ' MB' : (file.size / 1024).toFixed(2) + ' KB';
                                    imageUrl = URL.createObjectURL(file);
                                }
                            " />
                    </div>
                </div>

            </flux:fieldset>

            <flux:separator class="my-3" />

            <flux:fieldset legend="{{ __('Academic Information') }}">
                <div class="grid grid-cols-3 gap-x-4 gap-y-5">
                    <flux:input
                        name="document_type"
                        label="{{ __('Document Type') }}"
                        type="text"
                        value="{{ $student->documentType ?? '' }}" />

                    <flux:input
                        name="document_number"
                        label="{{ __('Document Number') }}"
                        type="text"
                        value="{{ $student->documentNumber ?? '' }}" />

                    <flux:input
                        type="date"
                        name="birth_date"
                        label="{{ __('Birth Date') }}"
                        value="{{ $student->birthDate ?? '' }}" />

                    <flux:input
                        name="phone"
                        label="{{ __('Phone Number') }}"
                        value="{{ $student->phone }}" />

                    <flux:input
                        name="address"
                        label="{{ __('Address') }}"
                        value="{{ $student->address }}" />

                    <flux:input name="institutional_email" label="{{ __('Institutional Email') }}"
                        value="{{ $student->institutionalEmail }}" />

                    <flux:input name="student_code" label="{{ __('Code') }}" value="{{ $student->studentCode }}" />

                    <flux:select name="gender" label="{{ __('Gender') }}">
                        <option value="male" @selected(old('gender', $student->gender) === 'male')>
                            {{ __('Male') }}
                        </option>
                        <option value="female" @selected(old('gender', $student->gender) === 'female')>
                            {{ __('Female') }}
                        </option>
                        <option value="other" @selected(old('gender', $student->gender) === 'other')>
                            {{ __('Other') }}
                        </option>
                    </flux:select>
                </div>
            </flux:fieldset>

            <flux:separator class="my-3" />

            <flux:fieldset legend="{{ __('Medical Information') }}">
                <div class="grid grid-cols-3 gap-x-4 gap-y-5">
                    <flux:input
                        name="eps_name"
                        label="{{ __('EPS Name') }}"
                        value="{{ $student->epsName ?? '' }}" />
                    <flux:input
                        name="eps_code"
                        label="{{ __('EPS Code') }}"
                        value="{{ $student->epsCode ?? '' }}" />

                    <flux:select label="{{ __('Blood Type') }}" name="blood_type">
                        @foreach (\Src\SMS\Students\Domain\ValueObjects\BloodType::VALID_TYPES as $type)
                            <option
                                value="{{ $type }}"
                                @selected(old('bloodType', $student->bloodType) === $type)>
                                {{ $type }}
                            </option>
                        @endforeach
                    </flux:select>
                </div>
            </flux:fieldset>

            <flux:separator class="my-3" />

            <flux:fieldset legend="Attendant Information">
                <div class="grid grid-cols-2 content-center gap-x-4 gap-y-5">
                    <flux:input
                        name="attendant_name"
                        type="text"
                        label="{{ __('Attendant') }}"
                        value="{{ $student->attendantName ?? '' }}" />
                    <flux:input
                        name="attendant_relationship"
                        type="text"
                        label="{{ __('Relationship') }}"
                        value="{{ $student->attendantRelationship ?? '' }}" />
                    <flux:input
                        name="attendant_phone"
                        type="text"
                        label="{{ __('Phone Number') }}"
                        value="{{ $student->attendantPhone ?? '' }}" />
                    <flux:input
                        name="attendant_email"
                        type="text"
                        label="{{ __('Email') }}"
                        value="{{ $student->attendantEmail ?? '' }}" />
                </div>
            </flux:fieldset>

            <div class="mt-12 flex gap-5">
                <flux:button
                    class="w-full cursor-pointer"
                    variant="primary"
                    type="submit"
                    color="green"
                    icon="check-circle">
                    {{ __('Save') }}
                </flux:button>

                <flux:button
                    class="w-full"
                    variant="primary"
                    icon="chevron-left"
                    href="{{ route('students.index') }}">
                    {{ __('Back') }}
                </flux:button>
            </div>
        </form>

    </div>
    <style>
        #photo_input {
            display: none;
        }
    </style>
</x-layouts::app>
