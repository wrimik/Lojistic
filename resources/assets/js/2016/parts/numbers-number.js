function number(num) {
    if(num) {
        while (num.indexOf(',') != -1) {
            num = num.replace(',', '');
        }
        num = num.replace(/[A-Za-z$-]/g, "");
        return parseFloat(num).toFixed(2);
    }else{
        return 0;
    }
}