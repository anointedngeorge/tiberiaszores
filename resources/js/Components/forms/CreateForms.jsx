
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import SelectInput from '@/Components/SelectInput';
import TextInput from '@/Components/TextInput';
import { router, useForm } from '@inertiajs/react';
import PrimaryButton from '../PrimaryButton';
import TextAreaInput from '../TextAreaInput';
import { TinyMCEEditor } from '../CKEditorComponent';
import { useState } from 'react';



function FormElement(data) {
    if (data.element === 'input') {
        return <input placeholder={data.title} type={data.type} className={data.classname}   />
    }

    else if (data.element === 'select') {
        return (
            <select className={data.classname}></select>
        )
    }

    if (data.element === 'textarea') {
        return <textarea className={data.classname} placeholder={data.title} ></textarea>
    }
}


export function CreateForms() {

    const { data, setData, post, errors, reset, processing, progress } = useForm()
    const [preview, setFormPriview] = useState(false);

    const onFormSubmit = (e) => {
        e.preventDefault();
        if (e.target.preview.checked) {
            setFormPriview(true)
        } else {
            // post(route('forms.store'));
            console.log(data);
        }
    }

    return (
        <div>

            <form onSubmit={onFormSubmit} >
                <div className='grid grid-cols-6 gap-2'>
                    <div>
                        <InputLabel
                            htmlFor="category"
                            value="Category"
                        />
                        <SelectInput
                            id="category"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("category", e.target.value)}
                        >
                            <option >Choose</option>
                            <option value="realtor">Realtors</option>
                        </SelectInput>
                        <InputError message={errors.name} className="mt-2" />
                    </div>

                    <div>
                        <InputLabel
                            htmlFor="type"
                            value="Type"
                        />
                        <SelectInput
                            id="type"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("type", e.target.value)}
                        >
                            <option >Choose</option>
                            <option value="text">Text</option>
                            <option value="tel">Tel</option>
                            <option value="date">Date</option>
                        </SelectInput>
                        <InputError message={errors.name} className="mt-2" />
                    </div>

                    <div>
                        <InputLabel
                            htmlFor="element"
                            value="Element"
                        />
                        <SelectInput
                            id="element"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("element", e.target.value)}
                        >
                            <option >Choose</option>
                            <option value="input">Input</option>
                            <option value="select">Select</option>
                            <option value="textarea">Textarea</option>
                        </SelectInput>
                        <InputError message={errors.name} className="mt-2" />
                    </div>

                    <div>
                        <InputLabel
                            htmlFor="title"
                            value="Title"
                        />
                        <TextInput
                            id="title"
                            type="text"
                            placeholder="title"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("title", e.target.value)}
                        />
                        <InputError message={errors.description} className="mt-2" />
                    </div>

                    <div>
                        <InputLabel
                            htmlFor="is_active"
                            value="IsActive"
                        />
                        <SelectInput
                            id="is_active"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("is_active", e.target.value)}
                        >
                            <option >Choose</option>
                            <option value={true}>Yes</option>
                            <option value={false} >No</option>
                        </SelectInput>
                        <InputError message={errors.name} className="mt-2" />
                    </div>

                    <div>
                        <InputLabel
                            htmlFor="classname"
                            value="Classname"
                        />
                        <TextInput
                            id="classname"
                            type="text"
                            placeholder="classname"
                            className="mt-1 block w-full"
                            onChange={(e) => setData("classname", e.target.value)}
                        />
                        <InputError message={errors.description} className="mt-2" />
                    </div>

                </div>

                <div className='w-full mt-6'>
                    <div>
                        <InputLabel
                            htmlFor="description"
                            value="Description"
                        />
                        <TextInput
                            id="description"
                            placeholder="In the case of select"
                            className="w-full"
                            onChange={(e) => setData("description", e.target.value)}
                        />
                        <InputError message={errors.description} className="mt-2" />
                    </div>
                </div>

                <div className='mt-4 flex flex-row gap-x-1'>
                    <PrimaryButton type={'submit'} className='bg-blue-500'> Create </PrimaryButton>
                    <input type='checkbox' name='preview' />
                </div>

            </form>

            <div className="mt-8">
                {preview && FormElement(data)}
            </div>
        </div>
    );
}