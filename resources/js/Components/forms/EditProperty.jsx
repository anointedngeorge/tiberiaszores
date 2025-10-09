
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import SelectInput from '@/Components/SelectInput';
import TextInput from '@/Components/TextInput';
import { router, useForm } from '@inertiajs/react';
import PrimaryButton from '../PrimaryButton';
import TextAreaInput from '../TextAreaInput';
import { TinyMCEEditor } from '../CKEditorComponent';
import { useState } from 'react';





export function EditProperty({
    object
}) {

    const { data, setData, post, errors, reset, processing, progress } = useForm({
        'name': object.name || '',
        'quantity': object.quantity || '',
        'description': object.description || '',
        'price': object.price || '',
        'mapcord': object.mapcord || '',
        'address': object.address || '',
        'video': object.video || '',
        'image': '',
        _method: "PUT"

    })
    const [preview, setImagePreview] = useState(object.image_path ? `/storage/${object.image_path}` : '/images/blank_bg.jpg');

    const onFormSubmit = (e) => {
        e.preventDefault();
        post(route('property.update', object.id))


    }


    return (
        <div>
            <div className="w-48">
                <img src={preview ? preview : `/storage/${object.image_path}`} className='w-full h-48' alt="..." />
            </div>
            <form onSubmit={onFormSubmit} >
                <div className="w-full">
                    <InputLabel
                        htmlFor="media"
                        value="Banner Image"
                    />
                    <TextInput
                        id="media"
                        type="file"
                        className="mt-1 block w-full"
                        onChange={(e) => {
                            const file = e.target.files[0];
                            if (file) {
                                setData("image", file);
                                setImagePreview(file);
                                const reader = new FileReader();
                                reader.onload = function (e) {
                                    setImagePreview(e.target.result);
                                };
                                reader.readAsDataURL(file);
                            }
                        }}
                    />
                    <InputError message={errors.name} className="mt-2" />
                </div>
                <div className='grid grid-cols-3 gap-2'>
                    <div>
                        <InputLabel
                            htmlFor="name"
                            value="Name"
                        />
                        <TextInput
                            id="name"
                            type="text"
                            defaultValue={data.name}
                            name="name"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("name", e.target.value)}
                        />
                        <InputError message={errors.name} className="mt-2" />
                    </div>

                    <div>
                        <InputLabel
                            htmlFor="quantity"
                            value="Quantity"
                        />
                        <TextInput
                            id="quantity"
                            type="number"
                            defaultValue={data.quantity}
                            name="quantity"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("quantity", e.target.value)}
                        />
                        <InputError message={errors.description} className="mt-2" />
                    </div>
                    <div>
                        <InputLabel
                            htmlFor="price"
                            value="Price"
                        />
                        <TextInput
                            id="Price"
                            type="number"
                            defaultValue={data.price}
                            name="price"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("price", parseFloat(e.target.value))}
                        />
                        <InputError message={errors.price} className="mt-2" />
                    </div>

                </div>

                <div className='w-full mt-6'>
                    <div>
                        <InputLabel
                            htmlFor="description"
                            value="Description"
                        />
                        <TinyMCEEditor
                            id="description"
                            name="description"
                            className="mt-1 block w-full h-dvh"
                            value={data.description}
                            onChange={(e) => setData("description", e)}
                        />
                        <InputError message={errors.description} className="mt-2" />
                    </div>
                </div>


                <div className='grid grid-cols-3 gap-2'>
                                    <div>
                                        <InputLabel
                                            htmlFor="Video"
                                            value="Youtube Video Tour Link"
                                        />
                                        <TextInput
                                            id="video"
                                            type="text"
                                            defaultValue={data.video}
                                            name="name"
                                            className="mt-1 block w-full"
                                            onChange={(e) => setData("video", e.target.value)}
                                        />
                                        <InputError message={errors.name} className="mt-2" />
                                    </div>
                
                                    <div>
                                        <InputLabel
                                            htmlFor="mapcord"
                                            value="mapcord"
                                        />
                                        <TextInput
                                            id="mapcord"
                                            type="text"
                                            defaultValue={data.mapcord}
                                            name="mapcord"
                                            className="mt-1 block w-full"
                                            onChange={(e) => setData("mapcord", e.target.value)}
                                        />
                                        <InputError message={errors.mapcord} className="mt-2" />
                                    </div>
                
                                    <div>
                                        <InputLabel
                                            htmlFor="address"
                                            value="Address"
                                        />
                                        <TextInput
                                            id="address"
                                            type="text"
                                            defaultValue={data.address}
                                            name="address"
                                            className="mt-1 block w-full"
                                            onChange={(e) => setData("address",  e.target.value)}
                                        />
                                        <InputError message={errors.address} className="mt-2" />
                                    </div>
                
                                </div>

                <div className='mt-4'>
                    <PrimaryButton type={'submit'} className='bg-green-500'> Update </PrimaryButton>
                </div>

            </form>
        </div>
    );
}