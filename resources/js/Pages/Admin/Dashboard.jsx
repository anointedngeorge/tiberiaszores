import ChartComponent from '@/Components/CustomCharts';
import { MoneyFormat } from '@/Functions';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';



const Card = ({ pageData }) => {
    return (
        <div className='grid grid-cols-3 gap-2 max-sm:grid-cols-1 '>
            {pageData?.map((item, index) => (
                <div key={`second_${index}`}  >
                    <div className={`${item?.className}`} >
                        <h3 className='text-white font-bold'>{item?.label}</h3>
                        <p className='text-right text-teal-50'>{item?.content}</p>
                    </div>
                </div>
            ))}
        </div>
    )
}


export default function Dashboard({ pageData }) {

    return (
        <h3>Loading dashboard</h3>
    )
}
