import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import TextInput from '@/Components/TextInput';
import { useForm, usePage } from '@inertiajs/react';
import PrimaryButton from '../PrimaryButton';
import SelectInput from '../SelectInput';
import TextAreaInput from '../TextAreaInput';
import { useEffect } from 'react';

export function EditBlogPost({object}) {
    const { data, setData, post, errors, processing } = useForm({
        title: object?.title,
        content: object?.content,
        image:'',
        _method: "PUT"
    });

    const { settings } = usePage().props;

    const onFormSubmit = (e) => {
        e.preventDefault();
        post(route('blog.update', object.id))        
    };


    // Define dynamic form structure with various field types
    const prepareForm = [
        [
            // { name: 'author', label: 'Author', type: 'text', params: { 'placeholder': 'Author' } },
            { name: 'title', label: 'Post Title', type: 'text', params: { 'placeholder': 'title', 'value':data.title } },

        ],
        [
            { name: 'content', label: 'Post Content', type: 'textarea', params: {'value':data.content} },
        ],
    ];

    return (
        <form onSubmit={onFormSubmit}>
            
            <img src={object?.image_path} alt="..." width={"100"} height={100} />

            <div className='mb-4'>
                <InputLabel
                    htmlFor="image"
                    value="Choose Picture"
                />
                <TextInput
                    id="image"
                    type="file"
                    name="image"
                    className="mt-1 block w-full"
                    onChange={(e) => setData("image", e.target.files[0])}
                />
                <InputError message={errors.image} className="mt-2" />
            </div>

            {prepareForm.map((row, rowIndex) => (
                <div key={rowIndex} className={`grid grid-cols-${row.length} gap-4 mb-4`} >
                    {row.map((field, fieldIndex) => (
                        <div key={fieldIndex} className="flex flex-col">
                            <InputLabel htmlFor={field.name} value={field.label} />

                            {field.type === 'text' && (
                                <TextInput
                                    id={field.name}
                                    type="text"
                                    name={field.name}
                                    value={data[field.name]}
                                    className="mt-1 block w-full"
                                    onChange={(e) => setData(field.name, e.target.value)}
                                    {...field.params}
                                />
                            )}

                            {field.type === 'textarea' && (
                                <TextAreaInput
                                    id={field.name}
                                    name={field.name}
                                    value={data[field.name]}
                                    className="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    onChange={(e) => setData(field.name, e.target.value)}
                                    {...field.params}
                                ></TextAreaInput>
                            )}

                            {field.type === 'select' && (
                                <SelectInput
                                    id={field.name}
                                    name={field.name}
                                    className="mt-1 block w-full"
                                    onChange={(e) => setData(field.name, e.target.value)}
                                    {...field.params}
                                >
                                    {field.options.map((option, idx) => (
                                        <option key={idx} value={option.value}>
                                            {option.label}
                                        </option>
                                    ))}
                                </SelectInput>
                            )}

                            {field.type === 'checkbox' && (
                                <div className="flex gap-2 mt-2">
                                    {field.options.map((option, idx) => (
                                        <label key={idx} className="flex items-center space-x-2">
                                            <input
                                                type="checkbox"
                                                value={option.value}
                                                checked={data.skills.includes(option.value)}
                                                onChange={(e) => {
                                                    const value = e.target.value;
                                                    setData('skills', data.skills.includes(value)
                                                        ? data.skills.filter((s) => s !== value)
                                                        : [...data.skills, value]
                                                    );
                                                }}
                                            />
                                            <span>{option.label}</span>
                                        </label>
                                    ))}
                                </div>
                            )}

                            {field.type === 'radio' && (
                                <div className="flex gap-2 mt-2">
                                    {field.options.map((option, idx) => (
                                        <label key={idx} className="flex items-center space-x-2">
                                            <input
                                                type="radio"
                                                name={field.name}
                                                value={option.value}
                                                checked={data.agree === option.value}
                                                onChange={(e) => setData(field.name, e.target.value)}
                                            />
                                            <span>{option.label}</span>
                                        </label>
                                    ))}
                                </div>
                            )}

                            <InputError message={errors[field.name]} className="mt-2" />
                        </div>
                    ))}
                </div>
            ))}

            <div className='mt-4'>
                <PrimaryButton type="submit" className='bg-green-500' disabled={processing}>
                    {processing ? 'Processing...' : 'Submit'}
                </PrimaryButton>
            </div>
        </form>
    );
}
