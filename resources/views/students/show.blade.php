<x-layouts::app :title="__('Student') . ' - ' . ($user->firstName ?? '') . ' ' . ($user->lastName ?? '')">
    <div class=" p-4">
        <form class="flex flex-col gap-2.5 w-4xl mx-auto">
            
            <flux:fieldset legend="{{ __('Student Information') }}">
                <div class="grid grid-cols-3 grid-rows-2 gap-3">

                    <flux:input name="first_name" label="{{ __('First Name') }}" value="{{ $user->firstName ?? '' }}" />
                    <flux:input name="last_name" label="{{ __('Last Name') }}" value="{{ $user->lastName ?? '' }}" />
                    <flux:input name="email" label="{{ __('Email') }}" type="email" value="{{ $user->email ?? '' }}" />

                    <flux:select label="{{ __('Status') }}">
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
                            @selected(old('status', $user->status) === 'pending_password_change')
                        >
                            {{ __('Pending Password Change') }}
                        </option>
                    </flux:select>

                    <div id="photo_control" class="row-span-2 row-start-1 col-start-3 self-center flex flex-col items-center justify-center gap-1.5">
                        <span class="font-bold text-sm text-zinc-800 w-36 dark:text-white">{{ __('Photo') }}</span>
                        
                        <label for="photo_input" class="cursor-pointer size-36 relative">
                            <img 
                                accept="image/*" 
                                id="photo_preview" 
                                class="rounded-xl border border-white/20 size-36 object-cover absolute"
                                src="{{ $student->photoPath ?? asset('storage/profile-default.png') }}"
                                alt="Photo Student" 
                            />
                            <flux:button
                                color="red"
                                icon="x-mark"
                                variant="primary"
                                size="xs"
                                class="absolute top-1.5 left-[calc(100%-2rem)] rounded-xl cursor-pointer border-2 border-white/20"
                            >
                            </flux:button>
                        </label>

                        <input class=" w-36 block" id="photo_input" name="photo_path" type="file" />
                    </div>
                </div>

            </flux:fieldset>

            <flux:fieldset legend="{{ __('Academic Information') }}" class="">
                <div class="grid grid-cols-3 gap-3">
                    <flux:input name="document_type" label="{{ __('Document Type') }}" type="text"
                        value="{{ $student->documentType ?? '' }}" />
                    <flux:input name="document_number" label="{{ __('Document Number') }}" type="text"
                        value="{{ $student->documentNumber ?? '' }}" />
                    <flux:input name="birth_date" label="{{ __('Birth Date') }}"
                        value="{{ $student->birthDate ?? '' }}" />

                    <flux:input name="phone" label="{{ __('Phone Number') }}" value="{{ $student->phone }}" />

                    <flux:input name="adress" label="{{ __('Address') }}" value="{{ $student->address }}" />

                    <flux:input name="institutiona_email" label="{{ __('Institutional Email') }}"
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

            <flux:fieldset legend="Attendant Information">
                <div class="grid grid-cols-2 gap-3">
                    <flux:input name="attendant_name" label="{{ __('Attendant') }}" type="text"
                        value="{{ $student->attendantName ?? '' }}" />
                    <flux:input name="attendant_relationship" label="{{ __('Relationship') }}" type="text"
                        value="{{ $student->attendantRelationship ?? '' }}" />
                    <flux:input name="attendant_phone" label="{{ __('Phone Number') }}" type="text"
                        value="{{ $student->attendantPhone ?? '' }}" />
                    <flux:input name="attendant_email" label="{{ __('Email') }}" type="text"
                        value="{{ $student->attendantEmail ?? '' }}" />
                </div>
            </flux:fieldset>
        </form>
    </div>
    <style>
        #photo_input {

            /* display: none; */
            &::file-selector-button {
                display: none;
            }
        }
    </style>
    <script>
        const photoPreview = document.getElementById('photo_preview');
        const photoInput = document.getElementById('photo_input');

        photoInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                console.log(file);
                const url = URL.createObjectURL(file);
                const reader = new FileReader();
                reader.readAsDataURL(file);
                console.log(reader);
                photoPreview.src = url;

                photoPreview.onload = () => {
                    URL.revokeObjectURL(url);
                }
            }
        });
    </script>
</x-layouts::app>