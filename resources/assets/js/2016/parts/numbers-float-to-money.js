function floatToMoney(num) {
    num = num.toFixed(2).replace(/./g, function (c, i, a) {
        return i && c !== "." && !((a.length - i) % 3) ? "," + c : c;
    });
    return '$' + num;
}