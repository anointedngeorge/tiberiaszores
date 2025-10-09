
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import SelectInput from '@/Components/SelectInput';
import TextInput from '@/Components/TextInput';
import { router, useForm } from '@inertiajs/react';
import PrimaryButton from '../PrimaryButton';
import { useEffect, useRef, useState } from 'react';
import { ViewData } from '../ViewData';
import { MoneyFormat } from '@/Functions';





export function EditSalesForm({
    pageData
}) {

    const { data, setData, post, errors, reset, processing, progress } = useForm({
        property_id: '',
        client_id: '',
        quantity: '',
        amount: '',
        sponsor_code: '',
        initial_amount_paid: '',
        first_generation_commission: '',
        second_generation_commission: '',
        third_generation_commission: '',
        first_generation: '',
        second_generation: '',
        third_generation: '',
    })
    const [sponsor, setSponsor] = useState({
        'first_generation_commission': {},
        'second_generation_commission': {},
        'third_generation_commission': {},
    });

    // commission placeholders
    const [first, setFirst] = useState(0);
    const [second, setSecond] = useState(0);
    const [third, setThird] = useState(0);

    // generation placeholder
    const [first_generation, setFirstGeneration] = useState('');
    const [second_generation, setSecondGeneration] = useState('');
    const [third_generation, setThirdGeneration] = useState('');


    const onFormSubmit = (e) => {
        e.preventDefault();
        post(route('propertysales.update', object.id))
    }

    const fetchSponsor = async (code) => {
        const url = route('propertysales.sponsor', code);

        const request = await fetch(url);
        const response = await request.json();
        if (response.status) {
            setSponsor(response);
        }

    }


    useEffect(() => {
        setFirstGeneration(sponsor.first_generation_commission.id);
        setSecondGeneration(sponsor.second_generation_commission.id);
        setThirdGeneration(sponsor.third_generation_commission.id);

        setData("first_generation", first_generation);
        setData("second_generation", second_generation);
        setData("third_generation", third_generation);

        if (data.first_generation_commission && data.initial_amount_paid) {
            const first = parseFloat(parseInt(data.first_generation_commission) / 100 * data.initial_amount_paid);
            setFirst(first);
        }

        if (data.second_generation_commission && data.initial_amount_paid) {
            const first = parseFloat(parseInt(data.second_generation_commission) / 100 * data.initial_amount_paid);
            setSecond(first);
        }

        if (data.third_generation_commission && data.initial_amount_paid) {
            const first = parseFloat(parseInt(data.third_generation_commission) / 100 * data.initial_amount_paid);
            setThird(first);
        }

    }, [
        data.first_generation_commission,
        data.second_generation_commission,
        data.third_generation_commission,
        data.initial_amount_paid,
        data.amount,
        sponsor,
        setData,
    ])


    return (
        <div>
            <form onSubmit={onFormSubmit} >
                <div>
                    <div className='grid grid-cols-5 gap-2'>
                        <div>
                            <InputLabel
                                htmlFor="property_listing"
                                value="Choose Property"
                            />
                            <SelectInput
                                id="property_listing"
                                className="mt-1 block w-full"
                                required={true}
                                onChange={(e) => setData("property_id", e.target.value)}
                            >
                                <option value="">Select Property</option>
                                {pageData.propertities.data.map((item) => (
                                    <option
                                        selected={pageData.propertysales.id == item.id ? true : false}
                                        value={item.id} key={`property_${item.id}`}>
                                        {item.name}
                                    </option>
                                ))}
                            </SelectInput>
                            <InputError message={errors.property_id} className="mt-2" />
                        </div>

                        <div>
                            <InputLabel
                                htmlFor="client_listing"
                                value="Choose Client"
                            />
                            <pre>

                            </pre>
                            <SelectInput
                                id="client_listing"
                                className="mt-1 block w-full"
                                required={true}
                                onChange={(e) => setData("client_id", e.target.value)}
                            >
                                <option value="">Select Clients {pageData.propertities.client_id}</option>
                                {pageData.clients.data.map((item) => (
                                    <option selected={pageData.propertysales.client_id.id == item.id ? true : false} value={item.id} key={`client_${item.id}`}>{item.fullname}</option>
                                ))}
                            </SelectInput>
                            <InputError message={errors.client_id} className="mt-2" />
                        </div>

                        <div>
                            <InputLabel
                                htmlFor="amount"
                                value="Amount"
                            />
                            <TextInput
                                id="amount"
                                type="number"
                                required={true}
                                defaultValue={pageData.propertysales.amount}
                                className="mt-1 block w-full"
                                onKeyUp={(e) => setData("amount", e.target.value)}
                            />
                            <InputError message={errors.amount} className="mt-2" />
                        </div>

                        <div>
                            <InputLabel
                                htmlFor="initial_amount_paid"
                                value="Initial Amount"
                            />
                            <TextInput
                                id="initial_amount_paid"
                                type="number"
                                required={true}
                                defaultValue={pageData.propertysales.initial_amount_paid}
                                className="mt-1 block w-full"
                                onKeyUp={(e) => setData("initial_amount_paid", e.target.value)}
                            />
                            <InputError message={errors.initial_amount_paid} className="mt-2" />
                        </div>

                        <div>
                            <InputLabel
                                htmlFor="quantity"
                                value="Quantity"
                            />
                            <TextInput
                                id="quantity"
                                type="number"
                                required={true}
                                defaultValue={pageData.propertysales.quantity}
                                className="mt-1 block w-full"
                                onKeyUp={(e) => setData("quantity", e.target.value)}
                            />
                            <InputError message={errors.quantity} className="mt-2" />
                        </div>
                    </div>

                    <div className='grid grid-cols-4 mt-4 gap-2'>
                        <div>
                            <InputLabel
                                htmlFor="sponsor"
                                value="Sponsor Code"
                            />
                            <TextInput
                                id="sponsor"
                                type="text"

                                required={true}
                                placeholder='Sponsor Code'
                                onKeyUp={e => fetchSponsor(e.target.value)}
                                className="mt-1 block w-full"
                                defaultValue={pageData.propertysales.sponsor_code}
                                onChange={(e) => setData("sponsor_code", e.target.value)}
                            />
                            <InputError message={errors.sponsor_code} className="mt-2" />
                        </div>

                        <div>
                            <InputLabel
                                htmlFor="first_generation_commission"
                                value="First Generation"
                            />
                            <SelectInput
                                id="first_generation_commission"
                                className="mt-1 block w-full"
                                onChange={(e) => setData("first_generation_commission", e.target.value)}
                            >
                                {[0, 15, 8, 5].map((item) => (
                                    <option
                                        selected={pageData.propertysales.first_generation_commission == item ? true : false}
                                        value={item} key={`first_gen_${item}`}>
                                        {`${item}%`}
                                    </option>
                                ))}
                            </SelectInput>
                            <InputError message={errors.first_generation_commission} className="mt-2" />
                        </div>

                        <div>
                            <InputLabel
                                htmlFor="second_generation_commission"
                                value="Second Generation"
                            />
                            <SelectInput
                                id="second_generation_commission"
                                className="mt-1 block w-full"
                                onChange={(e) => setData("second_generation_commission", e.target.value)}
                            >
                                {[0, 8, 5, 1].map((item) => (
                                    <option
                                        selected={pageData.propertysales.second_generation_commission == item ? true : false}
                                        value={item} key={`first_gen_${item}`}>
                                        {`${item}%`}
                                    </option>
                                ))}
                            </SelectInput>
                            <InputError message={errors.second_generation_commission} className="mt-2" />
                        </div>

                        <div>
                            <InputLabel
                                htmlFor="third_generation_commission"
                                value="Third Generation"
                            />
                            <SelectInput
                                id="third_generation_commission"
                                className="mt-1 block w-full"
                                onChange={(e) => setData("third_generation_commission", e.target.value)}
                            >
                                {[0, 15, 8, 5].map((item) => (
                                    <option
                                        selected={pageData.propertysales.third_generation_commission == item ? true : false}
                                        value={item} key={`first_gen_${item}`}>
                                        {`${item}%`}
                                    </option>
                                ))}
                            </SelectInput>
                            <InputError message={errors.third_generation_commission} className="mt-2" />
                        </div>
                    </div>

                    <div className='mt-4'>
                        <PrimaryButton type={'submit'} className='bg-green-500'> Create </PrimaryButton>
                    </div>
                </div>

            </form>

            {/* commission view */}
            <div className='w-full grid grid-cols-3 mt-4 gap-4'>
                <div>
                    <h3>First Generation </h3>
                    {first ? <pre className='font-bold  py-2 px-2 text-white bg-green-700'><MoneyFormat amount={first} /> </pre> : ''}
                    <ViewData
                        objects={sponsor.first_generation_commission}
                        exclude='id, created_at, updated_at, first_name, last_name'
                    />
                </div>
                <div>
                    <h3>Second Generation</h3>
                    {second ? <pre className='font-bold  py-2 px-2 text-white bg-gray-700'><MoneyFormat amount={second} /> </pre> : ''}
                    <ViewData
                        objects={sponsor.second_generation_commission}
                        exclude='id, created_at, updated_at, first_name, last_name'
                    />
                </div>
                <div>
                    <h3>Third Generation</h3>
                    {third ? <pre className='font-bold  py-2 px-2 text-white bg-amber-700'><MoneyFormat amount={third} /> </pre> : ''}
                    <ViewData
                        objects={sponsor.third_generation_commission}
                        exclude='id, created_at, updated_at, first_name, last_name'
                    />
                </div>
            </div>
            {/* commission view end */}
        </div>
    );
}