
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import SelectInput from '@/Components/SelectInput';
import TextInput from '@/Components/TextInput';
import { router, useForm } from '@inertiajs/react';
import PrimaryButton from '../PrimaryButton';
import TextAreaInput from '../TextAreaInput';





export function EditRealtor({
    object
}) {

    const { data, setData, post, errors, reset, processing, progress } = useForm({
        first_name: object.first_name || '',
        last_name: object.last_name || '',
        image: '',
        account_name: object.account_name || '',
        account_number: object.account_number || '',
        account_type: object.account_type || '',
        bank_name: object.bank_name || '',
        address: object.address || '',
        country: object.country || '',
        phone: object.phone || '',
        email: object.email || '',
        _method: "PUT"

    })

    const onFormSubmit = (e) => {
        e.preventDefault();
        post(route('realtors.update', object.id))
        // console.log(data);

    }


    // Define dynamic form structure with various field types
    const prepareForm = [
        [
            {
                name: 'first_name', label: 'First Name', type: 'text', params: {
                    'placeholder': 'FirstName',
                    'value': data.first_name
                }
            },
            {
                name: 'last_name', label: 'Last Name', type: 'text', params: {
                    'placeholder': 'LastName',
                    'value': data.last_name
                }
            },

        ],
        [
            { name: 'phone', label: 'Phone', type: 'text', params: { 'placeholder': 'Phone', 'value': data.phone } },
            {
                name: 'email', label: 'Email Address', type: 'text', params: {
                    'placeholder': '@example.com',
                    'value': data.email
                }
            },
        ],
        [
            {
                name: 'account_type',
                label: 'Account Type',
                type: 'select',
                params: { required: true },
                options: [
                    { value: 'savings', label: 'Savings' },
                    { value: 'current', label: 'Current' }
                ].sort((a, b) => (a.value === data.account_type ? -1 : 1))
            },
            { name: 'account_number', label: 'Account Number', type: 'text', params: { 'value': data.account_number, 'placeholder': 'AccountNumber' } },
            { name: 'account_name', label: 'Account Name', type: 'text', params: { 'value': data.account_name, 'placeholder': 'AccountName' } },
            { name: 'bank_name', label: 'Bank Name', type: 'text', params: { 'value': data.bank_name, 'placeholder': 'BankName' } },

        ],

        [
            { name: 'address', label: 'Address', type: 'text', params: { 'value': data.address, 'placeholder': 'Address' } },
            { name: 'country', label: 'Country', type: 'text', params: { 'value': data.country, 'placeholder': 'Country' } },

        ],
        // [
        //     { name: 'bio', label: 'Biography', type: 'textarea' }
        // ],
        // [
        //     {
        //         name: 'gender',
        //         label: 'Gender',
        //         type: 'select',
        //         options: [
        //             { value: '', label: 'Select Gender' },
        //             { value: 'male', label: 'Male' },
        //             { value: 'female', label: 'Female' }
        //         ]
        //     }
        // ],


    ];

    return (
        <form onSubmit={onFormSubmit}>

            <div className='mb-4'>
                <img src={object.image_path} alt={data.first_name} className='w-20 h-20' />
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