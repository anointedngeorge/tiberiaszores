import dayjs from 'dayjs'

export const formattedDate = (str_date) =>  dayjs(str_date).format('MMMM D, YYYY');

export const formattedDateTime = (str_date) =>  dayjs(str_date).format('MMMM D, YYYY:HH:MM:ss');

export function* rangeGenerator(start = 0, end = 10, step = 1) {

    let startNum = start == 0 ? step : start += step;
    for (startNum; startNum <= end; startNum += step) {
        yield startNum;
    }

}


export function MoneyFormat({ currency_type = 'NGN', amount = 0.00 }) {
    const formatted = new Intl.NumberFormat('en-NG', { style: 'currency', currency: currency_type }).format(amount);
    return formatted;
}


export function formatString(datastring) {
    return datastring.toString().split('_').join(' ').toUpperCase();
}




export function stringToArray(datastring) {
    return datastring
        .toString()
        .split(',')
        .map(item => item.trim())
        .filter(item => item !== ""); // Remove empty values if necessary
}


export function copyToClipboard(text) {
    navigator.clipboard.writeText(text)
        .then(() => {
            alert("Copied")
        })
        .catch(err => {
            // console.error('Failed to copy: ', err);
        });
}


export function DateStringFormat({ date }) {
    const dt = new Date(date);

    return dt.toLocaleString("en-US", {
        year: "numeric",
        month: "long",
        day: "numeric",
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
        timeZoneName: "short"
    });
}