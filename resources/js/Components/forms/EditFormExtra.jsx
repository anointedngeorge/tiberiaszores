import { useForm } from "@inertiajs/react";
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import SelectInput from '@/Components/SelectInput';
import TextAreaInput from '@/Components/TextAreaInput';
import TextInput from '@/Components/TextInput';
import DangerButton from '@/Components/DangerButton';




export function EditFormExtra({ extradata }) {
    const { data, setData, post } = useForm({
        title: extradata.title,
        subtitle: extradata.subtitle,
        content: extradata.content,
        type: extradata.type,
        _method: "PUT"
    });

    const onsubmit = (elem) => {
        elem.preventDefault();
        post(route('extras.update', parseInt(extradata.id)))
    }



    return (
        <form onSubmit={onsubmit} >
            <div className="grid grid-cols-3 gap-2 ">
                <div>
                    <InputLabel value={'Type'} />
                    <SelectInput className='w-full' required onChange={e => setData('type', e.target.value)}>
                        <option   >...</option>
                        <option value="slider">Slider</option>
                        <option value="testimonial">Testimonial</option>
                        <option value="downloads">Downloads</option>
                    </SelectInput>
                </div>
                <div>
                    <InputLabel value={'Title'} />
                    <TextInput className='w-full' defaultValue={extradata.title} onChange={e => setData('title', e.target.value)} />
                </div>

                <div>
                    <InputLabel value={'SubTitle'} />

                    <TextInput className='w-full' defaultValue={extradata.subtitle} onChange={e => setData('subtitle', e.target.value)} />
                </div>
            </div>

            <div className="grid grid-cols-1">
                <div>
                    <InputLabel value={'Content'} />
                    <TextAreaInput defaultValue={extradata.content} className='w-full' onChange={e => setData('content', e.target.value)} />
                </div>
            </div>

            <div className="grid grid-cols-1">
                <div>
                    <pre><img src={`/storage/${extradata.image_path}`} width={100} height={100} /></pre>
                    <InputLabel value={'Choose file'} />
                    <TextInput type={'file'} className='w-full' onChange={e => setData('image', e.target.files[0])} />
                </div>
            </div>

            <div className="grid grid-cols-1 mt-4">
                <div>
                    <PrimaryButton>Create</PrimaryButton>
                    <DangerButton>Delete</DangerButton>
                </div>
            </div>
        </form>
    );
}