
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import SelectInput from '@/Components/SelectInput';
import TextInput from '@/Components/TextInput';
import { router, useForm } from '@inertiajs/react';
import PrimaryButton from '../PrimaryButton';





export function CreateClient({
    object
}) {

    const { data, setData, post, errors, reset, processing, progress } = useForm()

    const onFormSubmit = (e) => {
        e.preventDefault();
        post(route('client.store'))
    }


    return (
        <form onSubmit={onFormSubmit} >
            <div>
                <div className='grid grid-cols-2 gap-2'>
                    <div>
                        <InputLabel
                            htmlFor="firstname"
                            value="FirstName"
                        />
                        <TextInput
                            id="firstname"
                            type="text"
                            name="first_name"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("first_name", e.target.value)}
                        />
                        <InputError message={errors.first_name} className="mt-2" />
                    </div>

                    <div>
                        <InputLabel
                            htmlFor="lastname"
                            value="LastName"
                        />
                        <TextInput
                            id="lastname"
                            type="text"
                            name="last_name"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("last_name", e.target.value)}
                        />
                        <InputError message={errors.last_name} className="mt-2" />
                    </div>
                </div>

                <div className='grid grid-cols-3 gap-x-2'>
                    <div>
                        <InputLabel
                            htmlFor="phone"
                            value="Phone"
                        />
                        <TextInput
                            id="phone"
                            type="text"
                            name="phone"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("phone", e.target.value)}
                        />
                        <InputError message={errors.phone} className="mt-2" />
                    </div>

                    <div>
                        <InputLabel
                            htmlFor="email"
                            value="email"
                        />
                        <TextInput
                            id="email"
                            type="text"
                            name="email"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("email", e.target.value)}
                        />
                        <InputError message={errors.email} className="mt-2" />
                    </div>

                    <div>
                        <InputLabel
                            htmlFor="address"
                            value="address"
                        />
                        <TextInput
                            id="address"
                            type="text"
                            name="address"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("address", e.target.value)}
                        />
                        <InputError message={errors.address} className="mt-2" />
                    </div>

                </div>

                <div className='mt-4'>
                    <PrimaryButton type={'submit'} className='bg-green-500'> Create </PrimaryButton>
                </div>
            </div>
        </form>
    );
}