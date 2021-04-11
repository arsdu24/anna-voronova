  var Currency = {
      rates: {
          "USD": 1.0,
          "EUR": 1.19032,
          "GBP": 1.37111,
          "CAD": 0.798002,
          "ARS": 0.0108304,
          "AUD": 0.761945,
          "BRL": 0.175998,
          "CLP": 0.00140696,
          "CNY": 0.152583,
          "CYP": 0.397899,
          "CZK": 0.0457511,
          "DKK": 0.160023,
          "EEK": 0.0706676,
          "HKD": 0.128568,
          "HUF": 0.00332922,
          "ISK": 0.00784396,
          "INR": 0.0133828,
          "JMD": 0.00687236,
          "JPY": 0.00911669,
          "LVL": 1.57329,
          "LTL": 0.320236,
          "MTL": 0.293496,
          "MXN": 0.0496015,
          "NZD": 0.703404,
          "NOK": 0.117698,
          "PLN": 0.262666,
          "SGD": 0.7455,
          "SKK": 21.5517,
          "SIT": 175.439,
          "ZAR": 0.0684611,
          "KRW": 0.000892009,
          "SEK": 0.117117,
          "CHF": 1.08118,
          "TWD": 0.0351414,
          "UYU": 0.02275,
          "MYR": 0.241837,
          "BSD": 1.0,
          "CRC": 0.00163238,
          "RON": 0.241821,
          "PHP": 0.0206015,
          "AED": 0.272294,
          "VEB": 4.67659e-15,
          "IDR": 6.85122e-05,
          "TRY": 0.122434,
          "THB": 0.0320142,
          "TTD": 0.147537,
          "ILS": 0.303916,
          "SYP": 0.000795176,
          "XCD": 0.370034,
          "COP": 0.000273439,
          "RUB": 0.0129155,
          "HRK": 0.15696,
          "KZT": 0.00230758,
          "TZS": 0.000431436,
          "XPT": 1203.78,
          "SAR": 0.266667,
          "NIO": 0.0286744,
          "LAK": 0.000106557,
          "OMR": 2.60078,
          "AMD": 0.00187827,
          "CDF": 0.000505286,
          "KPW": 0.00111112,
          "SPL": 6.0,
          "KES": 0.00932917,
          "ZWD": 0.00276319,
          "KHR": 0.000247691,
          "MVR": 0.0646787,
          "GTQ": 0.12975,
          "BZD": 0.497122,
          "BYR": 3.79075e-05,
          "LYD": 0.220519,
          "DZD": 0.00754688,
          "BIF": 0.000508622,
          "GIP": 1.37111,
          "BOB": 0.145074,
          "XOF": 0.00181464,
          "STD": 4.80064e-05,
          "NGN": 0.00262433,
          "PGK": 0.283911,
          "ERN": 0.0666667,
          "MWK": 0.00127267,
          "CUP": 0.0416478,
          "GMD": 0.0195182,
          "CVE": 0.0107946,
          "BTN": 0.0133828,
          "XAF": 0.00181464,
          "UGX": 0.000274278,
          "MAD": 0.111637,
          "MNT": 0.000350472,
          "LSL": 0.0684611,
          "XAG": 25.2843,
          "TOP": 0.438675,
          "SHP": 1.37111,
          "RSD": 0.0101216,
          "HTG": 0.0124528,
          "MGA": 0.000263328,
          "MZN": 0.015919,
          "FKP": 1.37111,
          "BWP": 0.0906425,
          "HNL": 0.0416674,
          "PYG": 0.000155721,
          "JEP": 1.37111,
          "EGP": 0.0636714,
          "LBP": 0.00066335,
          "ANG": 0.559244,
          "WST": 0.391691,
          "TVD": 0.761945,
          "GYD": 0.00474104,
          "GGP": 1.37111,
          "NPR": 0.00832524,
          "KMF": 0.00241952,
          "IRR": 2.37953e-05,
          "XPD": 2640.19,
          "SRD": 0.0706671,
          "TMM": 5.7085e-05,
          "SZL": 0.0684611,
          "MOP": 0.124823,
          "BMD": 1.0,
          "XPF": 0.00997492,
          "ETB": 0.0241243,
          "JOD": 1.41044,
          "MDL": 0.0559788,
          "MRO": 0.00278149,
          "YER": 0.00399471,
          "BAM": 0.608603,
          "AWG": 0.558659,
          "PEN": 0.278334,
          "VEF": 4.67659e-12,
          "SLL": 9.82092e-05,
          "KYD": 1.21951,
          "AOA": 0.00160014,
          "TND": 0.363541,
          "TJS": 0.0882296,
          "SCR": 0.0523797,
          "LKR": 0.00499093,
          "DJF": 0.00561914,
          "GNF": 0.000100133,
          "VUV": 0.00921107,
          "SDG": 0.0026308,
          "IMP": 1.37111,
          "GEL": 0.291812,
          "FJD": 0.486139,
          "DOP": 0.0176193,
          "XDR": 1.42354,
          "MUR": 0.0244351,
          "MMK": 0.000710174,
          "LRD": 0.00579246,
          "BBD": 0.5,
          "ZMK": 4.51393e-05,
          "XAU": 1743.91,
          "VND": 4.33429e-05,
          "UAH": 0.035777,
          "TMT": 0.285425,
          "IQD": 0.00068533,
          "BGN": 0.608603,
          "KGS": 0.0117931,
          "RWF": 0.00100888,
          "BHD": 2.65957,
          "UZS": 9.54611e-05,
          "PKR": 0.00655123,
          "MKD": 0.0193051,
          "AFN": 0.0128738,
          "NAD": 0.0684611,
          "BDT": 0.0118055,
          "AZN": 0.588345,
          "SOS": 0.00173777,
          "QAR": 0.274725,
          "PAB": 1.0,
          "CUC": 1.0,
          "SVC": 0.114286,
          "SBD": 0.1266,
          "ALL": 0.00966021,
          "BND": 0.7455,
          "KWD": 3.31207,
          "GHS": 0.173015,
          "ZMW": 0.0451393,
          "XBT": 60524.3,
          "NTD": 0.0337206,
          "BYN": 0.379075,
          "CNH": 0.152478,
          "MRU": 0.0278149,
          "STN": 0.0480064,
          "VES": 4.67659e-07,
          "MXV": 0.328556
      },
      convert: function(amount, from, to) {
          return (amount * this.rates[from]) / this.rates[to];
      }
  };