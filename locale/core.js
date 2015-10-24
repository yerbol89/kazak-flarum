app.translator.plural = function(count) {

if (count%10==1 && count%100!=11) {
    return 'one';
    }

if (count%10>=2 && count%10<=4 && (count%100<10 || count%100>=20)) {
    return 'two';
    }

else {
    return 'other';
    }
};
