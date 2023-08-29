export const numberFormat = (value, locale = 'en-US', options = {type:'currency',currency:'IDR'}) => {
    return new Intl.NumberFormat(locale, options).format(value);
};