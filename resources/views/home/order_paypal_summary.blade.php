<!doctype html>
<html lang="en-AU">

<head>
    <script src="https://dd.cdn.csnglobal.net/tags.js"></script>

    <title>{{isset($page_seo)?$page_seo->title:''}}</title>

    <meta name="description" content="{{isset($page_seo)?$page_seo->description:''}}">
    <meta name="keywords" content="{{isset($page_seo)?$page_seo->keywords:''}}">
    <meta name="author" content="{{isset($page_seo)?$page_seo->writer:''}}">
    <meta name="handler" content="{{isset($page_seo)?$page_seo->handler:''}}">

    <meta data-react-helmet="true" charset="utf-8" />
    <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" />
    <meta data-react-helmet="true" name="theme-color" content="#007CC2" />
   
    <link data-react-helmet="true" rel="manifest" href="/manifest.json" />
    <link data-react-helmet="true" rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <style data-styled="huXSnK jvVwcU dtkQzs gbBMLp lgIQGd hQNqYE brcqYh hLsDBC dHHbRk dIbONX iVXCSc jrmvto ioHOMS gngsea dqLzFZ iOtccR iwVPXm jctHbQ dUQRGU kOEylg cKhWBj gaPFGP bLLCOc igvagH hVvTOh eaWStw iweeuu hsSwjJ eggDyf cpTcMA feJYLb iVtCUm fhxatx knjlXG eZYPvs fGPvLs iMwZtM cVEiUH gDlJEj kpySPG bsMYTS fUMEqm erfkBV iXeXpQ fyXNbm djSLzE bbADCB epsSgc hYijQi mpjmA irEmfL gWLzxB jEPgrt gcksJJ gGfiDU giRUqh eUWKgh iXraXF gdHDkZ jXvPvf enfBmt iaOPHV cJTegZ hKUYLT bHcnLs dOPNfZ iBsLXi ineNZO bYfOqj ZoRmS fYgAZG bkohDI guXMYy iBqqkR fIxOVQ jgMiIX jwwlXZ iOhvNJ itIlnP jvmIQB lhJOaG ejTxcC lezUsB eUdTfy dbnnlD hBehwp kOrrYA AFFOV TIehu kjHhtt fvJrAM hOtOlY dfeIuG btZTLD hfESEv jhuupG iZeZLy euNjUW kwqaNo jeYRnq hdxerj zhpQy eAmrak liWZCr iqGfok eEajxe jmkjzV lbYeIW ficvqV dwFifh fNzyXB dnXTSD ggGkHu hYECGi dXOtzf hYbIdV cOKhfV fZMbDJ jdXyGj jslbUN Ibtok bBlENg eFFRCx czzCgR hEJWUH ieQjjv jCxqPJ gIUopi VtmMA lfeUTI cIOAaM hDQRjI bUujWC fimZGu iUXEz jAEoqZ KAVfe jKIDIz hVSFz hKujGL nPaqi jdilUM ljOKRd isQobd bLFwIG cBoTKu jbFocL hOSAQB lglItX igAzzp kacPXD ieQHCE kcmAmW kwIYhb hxhBqi gXPJGx ifqUjI akHPI iXRWeA lcgrgW kIzNIc lmsxtl jhSAbk ctSZcR krpDTx fwrZl giyoWh ihLcyg jDwSKB xkIpZ dMCkHl fadZNU kAzjOl iGmfbA kyNOni cUJIzn hvvJcA hveDxG TSUuQ joeIyx bkEfAz nLkyu kLcgUw nSXEE FdyAz egHHqM kehUQb etGqOS bhlVXn voJyf dtbQky dMDuep eXJFU duoXbz bAGIpf ljzJmV eiefuT nNgIq iqbpwL cYtdDz kSkjAa lkbSDu bWkNAB kAckPc bkWNnC ePfoOR eClItd crhqNg SCqky cQJAJn fMpsBs ezmLCO ggcomG bMFryJ kUhKHx hYtFVC gtGwHA ejPMEA eXcWgR koCIRO erGuuS kplQqb lnAEAM hlIHpg ePOqpS ckQAnf bbYeww hOOSoa jztvBx hOvXHt dyeCjc fbsJeK dnQYsv eYJlYT fDspfl ktkth eidGtW KrgzW fVNQPh bINWvH gHdoDW LmbkI kOcjxE hchUts eaEDFG jZOUoT eulRjT bbYAIw cSfIry bCkhsz eVzCbV btAiW dnQfvk diQpjy gewCWU ePwhpN hehfYe gulHDl hZiBWP gaJKQW IAyQW"
        data-styled-version="4.1.3">
        /* sc-component-id: sc-global-2754027540 */

        @font-face {
            font-family: 'Asap';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: local('Asap Medium'), local('Asap-Medium'), url(/dist/assets/asap-v11-latin-500.563b3446e8f3321c87a46394fbfe6aa9.woff2) format('woff2'), url(/dist/assets/asap-v11-latin-500.d68480c292eda88160ea6ee5c13d001e.woff) format('woff');
        }

        @font-face {
            font-family: 'Asap';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: local('Asap Medium Italic'), local('Asap-MediumItalic'), url(/dist/assets/asap-v11-latin-500italic.c9bba0f98ebe4b80298c3079998f1daf.woff2) format('woff2'), url(/dist/assets/asap-v11-latin-500italic.ddea9978ec9280a1666e97f72900f659.woff) format('woff');
        }

        @font-face {
            font-family: 'Asap';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: local('Asap SemiBold'), local('Asap-SemiBold'), url(/dist/assets/asap-v11-latin-600.44c0fe64ea24177eaf5d2c756339f8ff.woff2) format('woff2'), url(/dist/assets/asap-v11-latin-600.e0ed28cbe494a9c7b9907a2dee68f987.woff) format('woff');
        }

        @font-face {
            font-family: 'Asap';
            font-style: italic;
            font-weight: 600;
            font-display: swap;
            src: local('Asap SemiBold Italic'), local('Asap-SemiBoldItalic'), url(/dist/assets/asap-v11-latin-600italic.83dc85d237dc0050996cfcaeca619b4b.woff2) format('woff2'), url(/dist/assets/asap-v11-latin-600italic.3a5258d33722e973c0036d49044d74a1.woff) format('woff');
        }

        @font-face {
            font-family: 'Asap';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: local('Asap Bold'), local('Asap-Bold'), url(/dist/assets/asap-v11-latin-700.9a4809030b3c00f99995487673a03e53.woff2) format('woff2'), url(/dist/assets/asap-v11-latin-700.ed29ccd1c75f975f8e67433c38ba8293.woff) format('woff');
        }

        @font-face {
            font-family: 'Asap';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: local('Asap Bold Italic'), local('Asap-BoldItalic'), url(/dist/assets/asap-v11-latin-700italic.6c24efda068d113bcf85188e93684877.woff2) format('woff2'), url(/dist/assets/asap-v11-latin-700italic.e0830c4ffc3de91d9132659330bfd6a6.woff) format('woff');
        }

        @font-face {
            font-family: 'Asap';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: local('Asap Italic'), local('Asap-Italic'), url(/dist/assets/asap-v11-latin-italic.2d5da0135b88a6a2831cc16f205fd611.woff2) format('woff2'), url(/dist/assets/asap-v11-latin-italic.baef87a7cd672f030db89eaeda6424fa.woff) format('woff');
        }

        @font-face {
            font-family: 'Asap';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Asap Regular'), local('Asap-Regular'), url(/dist/assets/asap-v11-latin-regular.921d96110ceb161d9113124f7b4da4bb.woff2) format('woff2'), url(/dist/assets/asap-v11-latin-regular.65e91cfbcd5f34e1c86c422a858d9349.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: local('Roboto Thin'), local('Roboto-Thin'), url(/dist/assets/roboto-v20-latin-100.7370c3679472e9560965ff48a4399d0b.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-100.5cb7edfceb233100075dc9a1e12e8da3.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: local('Roboto Thin Italic'), local('Roboto-ThinItalic'), url(/dist/assets/roboto-v20-latin-100italic.f8b1df51ba843179fa1cc9b53d58127a.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-100italic.f9e8e590b4e0f1ff83469bb2a55b8488.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Roboto Light'), local('Roboto-Light'), url(/dist/assets/roboto-v20-latin-300.ef7c6637c68f269a882e73bcb57a7f6a.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-300.b00849e00f4c2331cddd8ffb44a6720b.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url(/dist/assets/roboto-v20-latin-300italic.14286f3ba79c6627433572dfa925202e.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-300italic.4df32891a5f2f98a363314f595482e08.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: local('Roboto Medium'), local('Roboto-Medium'), url(/dist/assets/roboto-v20-latin-500.020c97dc8e0463259c2f9df929bb0c69.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-500.87284894879f5b1c229cb49c8ff6decc.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: local('Roboto Medium Italic'), local('Roboto-MediumItalic'), url(/dist/assets/roboto-v20-latin-500italic.db4a2a231f52e497c0191e8966b0ee58.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-500italic.288ad9c6e8b43cf02443a1f499bdf67e.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: local('Roboto Bold'), local('Roboto-Bold'), url(/dist/assets/roboto-v20-latin-700.2735a3a69b509faf3577afd25bdf552e.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-700.adcde98f1d584de52060ad7b16373da3.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(/dist/assets/roboto-v20-latin-700italic.da0e717829e033a69dec97f1e155ae42.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-700italic.81f57861ed4ac74741f5671e1dff2fd9.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: local('Roboto Black'), local('Roboto-Black'), url(/dist/assets/roboto-v20-latin-900.9b3766ef4a402ad3fdeef7501a456512.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-900.bb1e4dc6333675d11ada2e857e7f95d7.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: local('Roboto Black Italic'), local('Roboto-BlackItalic'), url(/dist/assets/roboto-v20-latin-900italic.ebf6d1640ccddb99fb49f73c052c55a8.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-900italic.28f9151055c950874d2c6803a39b425b.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: local('Roboto Italic'), local('Roboto-Italic'), url(/dist/assets/roboto-v20-latin-italic.51521a2a8da71e50d871ac6fd2187e87.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-italic.fe65b8335ee19dd944289f9ed3178c78.woff) format('woff');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Roboto Regular'), local('Roboto-Regular'), url(/dist/assets/roboto-v20-latin-regular.479970ffb74f2117317f9d24d9e317fe.woff2) format('woff2'), url(/dist/assets/roboto-v20-latin-regular.60fa3c0614b8fb2f394fa29944c21540.woff) format('woff');
        }

        /* sc-component-id: sc-bwzfXH */

        .ihLcyg {
            font-family: 'Asap', sans-serif;
            character-space: 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ihLcyg {
                font-size: 56px;
                line-height: 54px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .ihLcyg {
                font-size: 76px;
                line-height: 70px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .ihLcyg {
                font-size: 96px;
                line-height: 88px;
            }
        }

        /* sc-component-id: sc-htpNat */

        .nNgIq {
            font-family: 'Asap', sans-serif;
            character-space: 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .nNgIq {
                font-size: 38px;
                line-height: 38px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .nNgIq {
                font-size: 44px;
                line-height: 44px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .nNgIq {
                font-size: 52px;
                line-height: 52px;
            }
        }

        /* sc-component-id: sc-dnqmqq */

        .btZTLD {
            font-family: 'Asap', sans-serif;
            character-space: 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .btZTLD {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .btZTLD {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .btZTLD {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-VigVT */

        .iGmfbA {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            cursor: pointer;
            color: #81b227;
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }

        .iGmfbA:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .iGmfbA {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .iGmfbA {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iGmfbA {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-fjdhpX */

        .jDwSKB {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            cursor: pointer;
            color: #81b227;
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }

        .jDwSKB:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .jDwSKB {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .jDwSKB {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .jDwSKB {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-chPdSV */

        .krpDTx {
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            color: #1c1c1c;
        }

        /* sc-component-id: sc-kgoBCf */

        .fadZNU {
            color: #1c1c1c;
            font-family: 'Asap', sans-serif;
            character-space: 0.5;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .fadZNU {
                font-size: 15px;
                line-height: 28px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .fadZNU {
                font-size: 16px;
                line-height: 32px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .fadZNU {
                font-size: 16px;
                line-height: 36px;
                margin: 16px 0;
            }
        }

        /* sc-component-id: sc-kGXeez */

        .eClItd {
            color: #1c1c1c;
            font-family: 'Asap', sans-serif;
            character-space: 0.5;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .eClItd {
                font-size: 15px;
                line-height: 28px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .eClItd {
                font-size: 16px;
                line-height: 32px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .eClItd {
                font-size: 16px;
                line-height: 36px;
                margin: 16px 0;
            }
        }

        /* sc-component-id: sc-dxgOiQ */

        .fDspfl {
            font-family: 'Asap', sans-serif;
            character-space: 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .fDspfl {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .fDspfl {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .fDspfl {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-jKJlTe */

        .lkbSDu {
            font-family: 'Asap', sans-serif;
            character-space: 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .lkbSDu {
                font-size: 15px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .lkbSDu {
                font-size: 16px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .lkbSDu {
                font-size: 16px;
            }
        }

        /* sc-component-id: sc-eNQAEJ */

        .kSkjAa {
            font-family: 'Asap', sans-serif;
            character-space: 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .kSkjAa {
                font-size: 17px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .kSkjAa {
                font-size: 18px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .kSkjAa {
                font-size: 18px;
            }
        }

        /* sc-component-id: sc-hMqMXs */

        .giyoWh {
            font-family: 'Asap', sans-serif;
            character-space: 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .giyoWh {
                font-size: 56px;
                line-height: 54px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .giyoWh {
                font-size: 76px;
                line-height: 70px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .giyoWh {
                font-size: 96px;
                line-height: 88px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .giyoWh {
                font-size: 36px;
                line-height: 39px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .giyoWh {
                font-size: 56px;
                line-height: 55px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .giyoWh {
                font-size: 66px;
                line-height: 73px;
            }
        }

        /* sc-component-id: sc-kEYyzF */

        .xkIpZ {
            font-family: 'Asap', sans-serif;
            character-space: 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .xkIpZ {
                font-size: 38px;
                line-height: 38px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .xkIpZ {
                font-size: 44px;
                line-height: 44px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .xkIpZ {
                font-size: 52px;
                line-height: 52px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .xkIpZ {
                font-size: 26px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .xkIpZ {
                font-size: 36px;
                line-height: 40px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .xkIpZ {
                font-size: 46px;
                line-height: 58px;
            }
        }

        /* sc-component-id: sc-kkGfuU */

        .kyNOni {
            font-family: 'Asap', sans-serif;
            character-space: 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .kyNOni {
                font-size: 26px;
                line-height: 26px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .kyNOni {
                font-size: 30px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .kyNOni {
                font-size: 32px;
                line-height: 32px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .kyNOni {
                font-size: 18px;
                line-height: 25px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .kyNOni {
                font-size: 26px;
                line-height: 40px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .kyNOni {
                font-size: 26px;
                line-height: 43px;
            }
        }

        /* sc-component-id: sc-gzOgki */

        .bkohDI {
            display: block;
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            font-family: 'Roboto', sans-serif;
            width: 100%;
            box-sizing: border-box;
            color: #1c1c1c;
            background-color: #ffffff;
            border-color: #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bkohDI {
                height: 48px;
                padding: 14px;
                font-size: 14px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .bkohDI {
                height: 56px;
                padding: 16px;
                font-size: 15px;
            }
        }

        .bkohDI:focus {
            outline: 0;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .bkohDI:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: #f5f5f5;
            border: 1px solid #c7c7c7;
        }

        .bkohDI:required:valid {
            border: 2px solid #61d125;
            background: #ffffff url('data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Ctitle%3EValidation%3C%2Ftitle%3E%3Cg%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20transform%3D%22translate(-490.000000%2C%20-1228.000000)%22%3E%3Cg%20id%3D%22Icon%2FForm%2FTick%22%20transform%3D%22translate(488.000000%2C%201226.000000)%22%3E%3Cg%20id%3D%22Interface-Icon%2FForm%2FTick%22%20transform%3D%22translate(2.000000%2C%202.000000)%22%3E%3Ccircle%20id%3D%22Oval%22%20fill%3D%22%2361D125%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%2210%22%3E%3C%2Fcircle%3E%3Cpath%20d%3D%22M5.86576096%2C10.4812992%20C5.42962704%2C10.0618766%204.73322808%2C10.0725019%204.31031034%2C10.5050314%20C3.8873926%2C10.937561%203.89810643%2C11.6282046%204.33424035%2C12.0476272%20L7.08423994%2C14.692255%20C7.51091553%2C15.1025817%208.18908496%2C15.1025817%208.61576055%2C14.692255%20L14.6657597%2C8.87407378%20C15.1018936%2C8.45465121%2015.1126074%2C7.76400757%2014.6896897%2C7.33147805%20C14.2667719%2C6.89894852%2013.570373%2C6.88832323%2013.134239%2C7.3077458%20L7.85000025%2C12.3895084%20L5.86576096%2C10.4812992%20Z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-size: 22px 22px;
            background-position: right 11px center;
        }

        .bkohDI:required:valid:required:invalid {
            background: none;
            border: 2px solid #ff0000;
        }

        /* sc-component-id: sc-hwwEjo */

        .bkWNnC {
            display: block;
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            font-family: 'Roboto', sans-serif;
            width: 100%;
            box-sizing: border-box;
            color: #1c1c1c;
            background-color: #ffffff;
            border-color: #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bkWNnC {
                height: 48px;
                padding: 14px;
                font-size: 14px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .bkWNnC {
                height: 56px;
                padding: 16px;
                font-size: 15px;
            }
        }

        .bkWNnC:focus {
            outline: 0;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .bkWNnC:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: #f5f5f5;
            border: 1px solid #c7c7c7;
        }

        .bkWNnC:required:valid {
            border: 2px solid #61d125;
            background: #ffffff url('data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Ctitle%3EValidation%3C%2Ftitle%3E%3Cg%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20transform%3D%22translate(-490.000000%2C%20-1228.000000)%22%3E%3Cg%20id%3D%22Icon%2FForm%2FTick%22%20transform%3D%22translate(488.000000%2C%201226.000000)%22%3E%3Cg%20id%3D%22Interface-Icon%2FForm%2FTick%22%20transform%3D%22translate(2.000000%2C%202.000000)%22%3E%3Ccircle%20id%3D%22Oval%22%20fill%3D%22%2361D125%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%2210%22%3E%3C%2Fcircle%3E%3Cpath%20d%3D%22M5.86576096%2C10.4812992%20C5.42962704%2C10.0618766%204.73322808%2C10.0725019%204.31031034%2C10.5050314%20C3.8873926%2C10.937561%203.89810643%2C11.6282046%204.33424035%2C12.0476272%20L7.08423994%2C14.692255%20C7.51091553%2C15.1025817%208.18908496%2C15.1025817%208.61576055%2C14.692255%20L14.6657597%2C8.87407378%20C15.1018936%2C8.45465121%2015.1126074%2C7.76400757%2014.6896897%2C7.33147805%20C14.2667719%2C6.89894852%2013.570373%2C6.88832323%2013.134239%2C7.3077458%20L7.85000025%2C12.3895084%20L5.86576096%2C10.4812992%20Z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-size: 22px 22px;
            background-position: right 11px center;
        }

        .bkWNnC:required:valid:required:invalid {
            background: none;
            border: 2px solid #ff0000;
        }

        /* sc-component-id: sc-kfGgVZ */

        .guXMYy {
            display: block;
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            font-family: 'Roboto', sans-serif;
            width: 100%;
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2014%208%22%3E%3Cpath%20d%3D%22M.99-.01a1%201%200%200%200-.7%201.72l6%206a1%201%200%200%200%201.42%200l6-6A1%201%200%201%200%2012.29.29L7%205.6%201.7.29A1%201%200%200%200%201%200z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-size: 14px 8px;
            padding-right: 42px !important;
            color: #1c1c1c;
            background-color: #ffffff;
            border-color: #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .guXMYy {
                height: 48px;
                padding: 14px;
                font-size: 14px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .guXMYy {
                height: 56px;
                padding: 16px;
                font-size: 15px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .guXMYy {
                background-position: right 14px center;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .guXMYy {
                background-position: right 16px center;
            }
        }

        .guXMYy:focus {
            outline: 0;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .guXMYy:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: #f5f5f5;
            border: 1px solid #c7c7c7;
        }

        .guXMYy:required:valid {
            border: 2px solid #61d125;
            background: #ffffff url('data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Ctitle%3EValidation%3C%2Ftitle%3E%3Cg%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20transform%3D%22translate(-490.000000%2C%20-1228.000000)%22%3E%3Cg%20id%3D%22Icon%2FForm%2FTick%22%20transform%3D%22translate(488.000000%2C%201226.000000)%22%3E%3Cg%20id%3D%22Interface-Icon%2FForm%2FTick%22%20transform%3D%22translate(2.000000%2C%202.000000)%22%3E%3Ccircle%20id%3D%22Oval%22%20fill%3D%22%2361D125%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%2210%22%3E%3C%2Fcircle%3E%3Cpath%20d%3D%22M5.86576096%2C10.4812992%20C5.42962704%2C10.0618766%204.73322808%2C10.0725019%204.31031034%2C10.5050314%20C3.8873926%2C10.937561%203.89810643%2C11.6282046%204.33424035%2C12.0476272%20L7.08423994%2C14.692255%20C7.51091553%2C15.1025817%208.18908496%2C15.1025817%208.61576055%2C14.692255%20L14.6657597%2C8.87407378%20C15.1018936%2C8.45465121%2015.1126074%2C7.76400757%2014.6896897%2C7.33147805%20C14.2667719%2C6.89894852%2013.570373%2C6.88832323%2013.134239%2C7.3077458%20L7.85000025%2C12.3895084%20L5.86576096%2C10.4812992%20Z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-size: 22px 22px;
            background-position: right 11px center;
        }

        .guXMYy:required:valid:required:invalid {
            background: none;
            border: 2px solid #ff0000;
        }

        /* sc-component-id: sc-esjQYD */

        .iBqqkR {
            display: block;
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            font-family: 'Roboto', sans-serif;
            width: 100%;
            box-sizing: border-box;
            color: #1c1c1c;
            background-color: #ffffff;
            border-color: #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .iBqqkR {
                height: 48px;
                padding: 14px;
                font-size: 14px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .iBqqkR {
                height: 56px;
                padding: 16px;
                font-size: 15px;
            }
        }

        .iBqqkR:focus {
            outline: 0;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .iBqqkR:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: #f5f5f5;
            border: 1px solid #c7c7c7;
        }

        .iBqqkR:required:valid {
            border: 2px solid #61d125;
            background: #ffffff url('data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Ctitle%3EValidation%3C%2Ftitle%3E%3Cg%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20transform%3D%22translate(-490.000000%2C%20-1228.000000)%22%3E%3Cg%20id%3D%22Icon%2FForm%2FTick%22%20transform%3D%22translate(488.000000%2C%201226.000000)%22%3E%3Cg%20id%3D%22Interface-Icon%2FForm%2FTick%22%20transform%3D%22translate(2.000000%2C%202.000000)%22%3E%3Ccircle%20id%3D%22Oval%22%20fill%3D%22%2361D125%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%2210%22%3E%3C%2Fcircle%3E%3Cpath%20d%3D%22M5.86576096%2C10.4812992%20C5.42962704%2C10.0618766%204.73322808%2C10.0725019%204.31031034%2C10.5050314%20C3.8873926%2C10.937561%203.89810643%2C11.6282046%204.33424035%2C12.0476272%20L7.08423994%2C14.692255%20C7.51091553%2C15.1025817%208.18908496%2C15.1025817%208.61576055%2C14.692255%20L14.6657597%2C8.87407378%20C15.1018936%2C8.45465121%2015.1126074%2C7.76400757%2014.6896897%2C7.33147805%20C14.2667719%2C6.89894852%2013.570373%2C6.88832323%2013.134239%2C7.3077458%20L7.85000025%2C12.3895084%20L5.86576096%2C10.4812992%20Z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-size: 22px 22px;
            background-position: right 11px center;
        }

        .iBqqkR:required:valid:required:invalid {
            background: none;
            border: 2px solid #ff0000;
        }

        /* sc-component-id: sc-ibxdXY */

        .ktkth {
            display: block;
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            font-family: 'Roboto', sans-serif;
            width: 100%;
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            color: #1c1c1c;
            background-color: #ffffff;
            border-color: #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ktkth {
                height: 48px;
                padding: 14px;
                font-size: 14px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .ktkth {
                height: 56px;
                padding: 16px;
                font-size: 15px;
            }
        }

        .ktkth:focus {
            outline: 0;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .ktkth:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: #f5f5f5;
            border: 1px solid #c7c7c7;
        }

        .ktkth:required:valid {
            border: 2px solid #61d125;
            background: #ffffff url('data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Ctitle%3EValidation%3C%2Ftitle%3E%3Cg%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20transform%3D%22translate(-490.000000%2C%20-1228.000000)%22%3E%3Cg%20id%3D%22Icon%2FForm%2FTick%22%20transform%3D%22translate(488.000000%2C%201226.000000)%22%3E%3Cg%20id%3D%22Interface-Icon%2FForm%2FTick%22%20transform%3D%22translate(2.000000%2C%202.000000)%22%3E%3Ccircle%20id%3D%22Oval%22%20fill%3D%22%2361D125%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%2210%22%3E%3C%2Fcircle%3E%3Cpath%20d%3D%22M5.86576096%2C10.4812992%20C5.42962704%2C10.0618766%204.73322808%2C10.0725019%204.31031034%2C10.5050314%20C3.8873926%2C10.937561%203.89810643%2C11.6282046%204.33424035%2C12.0476272%20L7.08423994%2C14.692255%20C7.51091553%2C15.1025817%208.18908496%2C15.1025817%208.61576055%2C14.692255%20L14.6657597%2C8.87407378%20C15.1018936%2C8.45465121%2015.1126074%2C7.76400757%2014.6896897%2C7.33147805%20C14.2667719%2C6.89894852%2013.570373%2C6.88832323%2013.134239%2C7.3077458%20L7.85000025%2C12.3895084%20L5.86576096%2C10.4812992%20Z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-size: 22px 22px;
            background-position: right 11px center;
        }

        .ktkth:required:valid:required:invalid {
            background: none;
            border: 2px solid #ff0000;
        }

        /* sc-component-id: sc-RefOD */

        .ctSZcR {
            font-family: "Asap", sans-serif;
            margin: 16px 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ctSZcR {
                display: none;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .ctSZcR {
                margin: 64px 0 0;
            }
        }

        /* sc-component-id: sc-iQKALj */

        .fwrZl {
            margin: 0 20px;
        }

        /* sc-component-id: sc-bwCtUz */

        .jrmvto {
            margin: 0;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .jrmvto>svg {
            width: 22px;
            height: 22px;
        }

        .jrmvto svg {
            -webkit-animation: iVXCSc 1s linear infinite;
            animation: iVXCSc 1s linear infinite;
        }

        /* sc-component-id: sc-hrWEMg */

        .iOhvNJ {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
            box-sizing: border-box;
            -webkit-text-decoration: none;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            font-family: 'Asap', sans-serif;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase;
            -webkit-letter-spacing: 0.7px;
            -moz-letter-spacing: 0.7px;
            -ms-letter-spacing: 0.7px;
            letter-spacing: 0.7px;
            color: #ffffff;
            background: #81b227;
            border: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .iOhvNJ {
                height: 48px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .iOhvNJ {
                height: 56px;
            }
        }

        .iOhvNJ:hover {
            color: #ffffff;
            background: #659016;
        }

        .iOhvNJ:focus {
            outline: none;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .iOhvNJ:disabled {
            cursor: not-allowed;
            color: #ffffff;
            background: #c7c7c7;
            border: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .iOhvNJ {
                height: 48px;
                min-width: 69px;
                font-size: 16px;
                padding: 10px;
                line-height: 1.5;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .iOhvNJ {
                height: 56px;
                min-width: 90px;
                font-size: 18px;
                padding: 10px;
                line-height: 1.33;
            }
        }

        /* sc-component-id: sc-hZSUBg */

        .jvmIQB {
            width: 100%;
        }

        /* sc-component-id: sc-cMhqgX */

        .lgIQGd {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
        }

        /* sc-component-id: sc-iuJeZd */

        .mpjmA {
            display: block;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .mpjmA {
                margin: 0 16px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .mpjmA {
                margin: 0 36px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .mpjmA {
                margin: 0 64px;
            }
        }

        /* sc-component-id: sc-esOvli */

        .giRUqh {
            display: -ms-grid;
            display: grid;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .giRUqh {
                grid-column-gap: 24px;
                grid-row-gap: 24px;
                -ms-grid-columns: (1fr)[4];
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .giRUqh {
                grid-column-gap: 24px;
                grid-row-gap: 24px;
                -ms-grid-columns: (1fr)[12];
                grid-template-columns: repeat(12, 1fr);
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .giRUqh {
                grid-column-gap: 32px;
                grid-row-gap: 32px;
                -ms-grid-columns: (1fr)[12];
                grid-template-columns: repeat(12, 1fr);
            }
        }

        /* sc-component-id: sc-hMFtBS */

        .gWLzxB {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        /* sc-component-id: sc-hORach */

        @media screen and (min-width:0px) and (max-width:767px) {
            .eUWKgh {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .eUWKgh {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .eUWKgh {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .iXraXF {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 2;
                -ms-grid-row-span: 1;
                grid-row: 2 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .iXraXF {
                -ms-grid-column: 5;
                -ms-grid-column-span: 4;
                grid-column: 5 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iXraXF {
                -ms-grid-column: 5;
                -ms-grid-column-span: 4;
                grid-column: 5 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .gdHDkZ {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 3;
                -ms-grid-row-span: 1;
                grid-row: 3 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .gdHDkZ {
                -ms-grid-column: 9;
                -ms-grid-column-span: 4;
                grid-column: 9 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .gdHDkZ {
                -ms-grid-column: 9;
                -ms-grid-column-span: 4;
                grid-column: 9 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .jXvPvf {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .jXvPvf {
                -ms-grid-column: 1;
                -ms-grid-column-span: 6;
                grid-column: 1 / span 6;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .jXvPvf {
                -ms-grid-column: 1;
                -ms-grid-column-span: 3;
                grid-column: 1 / span 3;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .enfBmt {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 2;
                -ms-grid-row-span: 1;
                grid-row: 2 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .enfBmt {
                -ms-grid-column: 7;
                -ms-grid-column-span: 6;
                grid-column: 7 / span 6;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .enfBmt {
                -ms-grid-column: 4;
                -ms-grid-column-span: 3;
                grid-column: 4 / span 3;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .iaOPHV {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 3;
                -ms-grid-row-span: 1;
                grid-row: 3 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .iaOPHV {
                -ms-grid-column: 13;
                -ms-grid-column-span: 6;
                grid-column: 13 / span 6;
                -ms-grid-row: 2;
                -ms-grid-row-span: 1;
                grid-row: 2 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iaOPHV {
                -ms-grid-column: 7;
                -ms-grid-column-span: 3;
                grid-column: 7 / span 3;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .cJTegZ {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 4;
                -ms-grid-row-span: 1;
                grid-row: 4 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .cJTegZ {
                -ms-grid-column: 19;
                -ms-grid-column-span: 6;
                grid-column: 19 / span 6;
                -ms-grid-row: 2;
                -ms-grid-row-span: 1;
                grid-row: 2 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .cJTegZ {
                -ms-grid-column: 10;
                -ms-grid-column-span: 3;
                grid-column: 10 / span 3;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hKUYLT {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hKUYLT {
                -ms-grid-column: 1;
                -ms-grid-column-span: 6;
                grid-column: 1 / span 6;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hKUYLT {
                -ms-grid-column: 1;
                -ms-grid-column-span: 6;
                grid-column: 1 / span 6;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bHcnLs {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 2;
                -ms-grid-row-span: 1;
                grid-row: 2 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .bHcnLs {
                -ms-grid-column: 7;
                -ms-grid-column-span: 6;
                grid-column: 7 / span 6;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .bHcnLs {
                -ms-grid-column: 7;
                -ms-grid-column-span: 6;
                grid-column: 7 / span 6;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .dOPNfZ {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .dOPNfZ {
                -ms-grid-column: 1;
                -ms-grid-column-span: 9;
                grid-column: 1 / span 9;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dOPNfZ {
                -ms-grid-column: 1;
                -ms-grid-column-span: 9;
                grid-column: 1 / span 9;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .iBsLXi {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 2;
                -ms-grid-row-span: 1;
                grid-row: 2 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .iBsLXi {
                -ms-grid-column: 10;
                -ms-grid-column-span: 3;
                grid-column: 10 / span 3;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iBsLXi {
                -ms-grid-column: 10;
                -ms-grid-column-span: 3;
                grid-column: 10 / span 3;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ineNZO {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .ineNZO {
                -ms-grid-column: 1;
                -ms-grid-column-span: 12;
                grid-column: 1 / span 12;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .ineNZO {
                -ms-grid-column: 1;
                -ms-grid-column-span: 12;
                grid-column: 1 / span 12;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bYfOqj {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .bYfOqj {
                -ms-grid-column: 1;
                -ms-grid-column-span: 12;
                grid-column: 1 / span 12;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .bYfOqj {
                -ms-grid-column: 1;
                -ms-grid-column-span: 7;
                grid-column: 1 / span 7;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ZoRmS {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 2;
                -ms-grid-row-span: 1;
                grid-row: 2 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .ZoRmS {
                -ms-grid-column: 1;
                -ms-grid-column-span: 12;
                grid-column: 1 / span 12;
                -ms-grid-row: 2;
                -ms-grid-row-span: 1;
                grid-row: 2 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .ZoRmS {
                -ms-grid-column: 8;
                -ms-grid-column-span: 1;
                grid-column: 8 / span 1;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .fYgAZG {
                -ms-grid-column: 1;
                -ms-grid-column-span: 4;
                grid-column: 1 / span 4;
                -ms-grid-row: 3;
                -ms-grid-row-span: 1;
                grid-row: 3 / span 1;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .fYgAZG {
                -ms-grid-column: 1;
                -ms-grid-column-span: 12;
                grid-column: 1 / span 12;
                -ms-grid-row: 3;
                -ms-grid-row-span: 1;
                grid-row: 3 / span 1;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .fYgAZG {
                -ms-grid-column: 9;
                -ms-grid-column-span: 4;
                grid-column: 9 / span 4;
                -ms-grid-row: 1;
                -ms-grid-row-span: 1;
                grid-row: 1 / span 1;
            }
        }

        /* sc-component-id: sc-bAeIUo */

        .hveDxG {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            height: 100%;
            overflow: hidden;
            position: relative;
            margin-left: -25px;
            -webkit-clip-path: polygon(100% 0, 100% 50%, 100% 100%, 0% 100%, 25px 50%, 0% 0%);
            -webkit-clip-path: polygon(100% 0, 100% 50%, 100% 100%, 0% 100%, 25px 50%, 0% 0%);
            clip-path: polygon(100% 0, 100% 50%, 100% 100%, 0% 100%, 25px 50%, 0% 0%);
            border-left: 2px solid #c7c7c7;
            background: linear-gradient(to top right, #c7c7c7 48%, transparent 50%) top left / 25px 50%, linear-gradient(to bottom right, #c7c7c7 48%, transparent 50%) bottom left/25px 50%;
            background-color: #1c1c1c;
            background-repeat: no-repeat;
        }

        .hveDxG:first-of-type {
            background: #1c1c1c;
            -webkit-clip-path: none;
            -webkit-clip-path: none;
            clip-path: none;
            margin-left: 0;
            border-left: 0;
        }

        /* sc-component-id: sc-iujRgT */

        .bkEfAz {
            color: #ffffff;
            display: inline-block;
            font-family: "Asap", sans-serif;
            font-size: 18px;
            font-weight: 600;
            -webkit-transform: translateX(-30px);
            -ms-transform: translateX(-30px);
            transform: translateX(-30px);
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .bkEfAz {
                font-size: 15px;
                -webkit-transform: translate(-30px, 3px);
                -ms-transform: translate(-30px, 3px);
                transform: translate(-30px, 3px);
            }
        }

        /* sc-component-id: sc-GMQeP */

        @media screen and (min-width:0px) and (max-width:767px) {
            .nLkyu {
                display: none;
            }
        }

        /* sc-component-id: sc-exAgwC */

        .TSUuQ {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-transform: translateX(15px);
            -ms-transform: translateX(15px);
            transform: translateX(15px);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            z-index: 5;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .TSUuQ {
                -webkit-transform: translateX(25px);
                -ms-transform: translateX(25px);
                transform: translateX(25px);
            }
        }

        /* sc-component-id: sc-cQFLBn */

        .hvvJcA {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #ffffff;
            border: 1px solid #c7c7c7;
            border-radius: 5px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 70px;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 16px;
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hvvJcA {
                margin-top: 25px;
            }
        }

        @media screen and (min-width:320px) and (max-width:767px) {
            .hvvJcA {
                margin-top: 72px;
            }
        }

        /* sc-component-id: sc-gojNiO */

        .joeIyx svg {
            fill: #007CC2;
            height: 48px;
            width: 48px;
        }

        /* sc-component-id: sc-daURTG */

        .kLcgUw svg {
            fill: #007CC2;
            height: 48px;
            width: 48px;
        }

        /* sc-component-id: sc-bXGyLb */

        .nSXEE svg {
            fill: #007CC2;
            height: 48px;
            width: 48px;
        }

        /* sc-component-id: sc-fjmCvl */

        .diQpjy {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            cursor: pointer;
            color: #81b227;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            color: #fafbfc;
            font-size: 14px !important;
        }

        .diQpjy:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .diQpjy {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .diQpjy {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .diQpjy {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-TFwJa */

        .dHHbRk {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 40px;
            min-height: 40px;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        @media screen and (min-width:0px) and (max-width:960px) {
            .dHHbRk .hideOnMobile {
                display: none;
            }
        }

        /* sc-component-id: sc-bHwgHz */

        .dIbONX {
            text-align: center;
            color: white;
        }

        @media screen and (min-width:0px) and (max-width:960px) {
            .dIbONX .hideOnMobile {
                display: none;
            }
        }

        /* sc-component-id: sc-krDsej */

        .brcqYh {
            width: 75%;
        }

        @media screen and (min-width:0px) and (max-width:960px) {
            .brcqYh {
                display: none;
            }
        }

        /* sc-component-id: sc-dTdPqK */

        .hLsDBC {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hLsDBC {
                height: 40px;
                min-height: 40px;
            }
        }

        /* sc-component-id: sc-itybZL */

        .huXSnK {
            width: 100%;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .huXSnK {
                display: block;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .huXSnK {
                height: 40px;
                min-height: 40px;
            }
        }

        /* sc-component-id: sc-eMigcr */

        .ioHOMS {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media screen and (min-width:320px) and (max-width:959px) {
            .ioHOMS {
                padding: 0 16px;
                margin-right: -36px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .ioHOMS {
                display: none;
            }
        }

        /* sc-component-id: sc-fzsDOv */

        .gngsea {
            width: 20px;
            height: 14px;
        }

        .gngsea svg {
            width: 20px;
            height: 14px;
        }

        .gngsea svg path {
            stroke: #ffffff;
        }

        /* sc-component-id: sc-gPWkxV */

        .gaJKQW {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 9px;
            height: 16px;
        }

        .gaJKQW svg {
            display: block;
            width: 9px;
            height: 6px;
            fill: #ffffff;
        }

        /* sc-component-id: sc-jVODtj */

        .gewCWU {
            position: relative;
            z-index: 150;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .gewCWU>li {
            display: inline-block;
        }

        .gewCWU>li ul {
            padding: 0;
            list-style: none;
        }

        .gewCWU>li ul li>a {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #007CC2;
            -webkit-text-decoration: none;
            text-decoration: none;
            font-size: 16px;
            line-height: 16px;
            height: 16px;
            padding: 12px;
            padding-left: 25px;
        }

        .gewCWU>li>a {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            font-size: 16px;
            line-height: 16px;
            padding: 0px;
            height: 100%;
        }

        .gewCWU>li>a>svg {
            fill: #ffffff;
        }

        .gewCWU>li>ul {
            position: absolute;
            display: none;
            list-style: none;
            margin: 0;
            padding: 0;
            white-space: nowrap;
        }

        .gewCWU>li:hover>ul {
            display: block;
            left: auto;
            right: 0;
        }

        .gewCWU>li>ul>li>a {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #007CC2;
            color: #ffffff;
            -webkit-text-decoration: none;
            text-decoration: none;
            font-size: 16px;
            line-height: 16px;
            height: 16px;
            padding: 12px;
        }

        /* sc-component-id: sc-kUaPvJ */

        .hehfYe {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            max-height: 40px;
            height: 40px;
        }

        /* sc-component-id: sc-giadOv */

        .hZiBWP {
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            align-self: center;
            margin-left: 12px;
            margin-right: 12px;
        }

        .hZiBWP svg {
            width: 18px;
            height: 18x;
            fill: #ffffff;
        }

        /* sc-component-id: sc-fONwsr */

        .ePwhpN {
            color: #ffffff;
            cursor: pointer;
        }

        /* sc-component-id: sc-cqCuEk */

        .dUQRGU {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            cursor: pointer;
            color: #81b227;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            color: #ffffff;
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .dUQRGU:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .dUQRGU {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .dUQRGU {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dUQRGU {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-dliRfk */

        .gulHDl {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            color: #ffffff;
            -webkit-text-decoration: none;
            text-decoration: none;
            margin: 0px !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .gulHDl {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .gulHDl {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .gulHDl {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-kLIISr */

        .jctHbQ {
            float: left;
            margin-right: 12px;
        }

        /* sc-component-id: sc-qrIAp */

        .iwVPXm {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .iwVPXm> :last-child {
            margin-right: 0px;
        }

        /* sc-component-id: sc-iGrrsa */

        .gbBMLp {
            width: 100%;
            box-shadow: 2px 2px 5px #fafbfc;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .gbBMLp {
                z-index: 150;
                background-color: #007CC2;
                height: 40px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .gbBMLp {
                z-index: 150;
                background-color: #007CC2;
                height: 40px;
            }
        }

        /* sc-component-id: sc-bmyXtO */

        .hQNqYE {
            display: block;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            height: 40px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hQNqYE {
                margin: 0 16px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hQNqYE {
                margin: 0 36px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hQNqYE {
                margin: 0 64px;
            }
        }

        /* sc-component-id: sc-dEoRIm */

        .dqLzFZ {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dqLzFZ {
                display: none;
            }
        }

        /* sc-component-id: sc-jtggT */

        .iOtccR {
            width: 22px;
            height: 22px;
        }

        .iOtccR svg {
            width: 22px;
            height: 22px;
            fill: #ffffff;
        }

        /* sc-component-id: sc-ebFjAB */

        .feJYLb {
            width: 22px;
            height: 22px;
        }

        .feJYLb svg {
            width: 22px;
            height: 22px;
            fill: #007CC2;
        }

        /* sc-component-id: sc-jKVCRD */

        .iVtCUm {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            margin: 0 !important;
            padding-left: 5px;
            color: #fafbfc;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .iVtCUm {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .iVtCUm {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iVtCUm {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .iVtCUm {
                line-height: 16px !important;
                font-size: 10px;
                padding-left: 10px !important;
            }
            .iVtCUm a {
                font-size: 10px !important;
                line-height: 16px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iVtCUm {
                line-height: 0 !important;
            }
            .iVtCUm a {
                line-height: 16px !important;
            }
        }

        /* sc-component-id: sc-kaNhvL */

        .cpTcMA {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .cpTcMA {
                display: none;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {}

        /* sc-component-id: sc-LKuAh */

        .eaWStw {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 9px;
            padding-left: 6px;
            height: 16px;
        }

        .eaWStw svg {
            display: block;
            width: 9px;
            height: 6px;
            fill: #ffffff;
        }

        /* sc-component-id: sc-iBEsjs */

        .hsSwjJ {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 16px;
            padding-left: 4px;
        }

        .hsSwjJ svg {
            display: block;
            width: 10px;
            height: 10px;
            fill: #007CC2;
        }

        /* sc-component-id: sc-hzNEM */

        .gaPFGP {
            display: block;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .gaPFGP {
                margin: 0 16px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .gaPFGP {
                margin: 0 36px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .gaPFGP {
                margin: 0 64px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .gaPFGP {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                height: 40px;
                min-height: 40px;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }
        }

        /* sc-component-id: sc-chbbiW */

        .kOEylg {
            width: 100%;
            box-shadow: 2px 2px 5px #fafbfc;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .kOEylg {
                display: none;
                background-color: #fafbfc;
                max-height: 100vh;
                overflow-x: hidden;
                overflow-y: scroll;
                z-index: 150;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .kOEylg {
                z-index: 150;
                background-color: #1c1c1c;
                height: 40px;
            }
        }

        /* sc-component-id: sc-kxynE */

        @media screen and (min-width:0px) and (max-width:959px) {
            .hVvTOh {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            .hVvTOh .topMenu {
                font-weight: bold;
                padding-left: 0;
            }
            .hVvTOh .sectionMenu {
                font-weight: bold;
            }
            .hVvTOh a:not(.topMenu):not(.sectionMenu) {
                padding-left: 25px;
            }
            .hVvTOh ul {
                list-style: none;
                margin: 0;
                padding: 0;
                width: 100%;
            }
            .hVvTOh a {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-text-decoration: none;
                text-decoration: none;
                color: #1c1c1c;
                font-size: 16px;
                height: 16px;
                padding: 12px 0 12px 12px;
                width: 100vw;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hVvTOh {
                position: relative;
                z-index: 150;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                margin: 0;
                padding: 0;
            }
            .hVvTOh>li {
                display: inline-block;
            }
            .hVvTOh>li ul {
                padding: 0;
                list-style: none;
            }
            .hVvTOh>li ul li>a {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                color: #ffffff;
                background-color: #1c1c1c;
                -webkit-text-decoration: none;
                text-decoration: none;
                font-size: 16px;
                line-height: 16px;
                height: 16px;
                padding: 12px;
                padding-left: 25px;
            }
            .hVvTOh>li>a {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-text-decoration: none;
                text-decoration: none;
                font-size: 16px;
                line-height: 16px;
                padding: 0 12px;
                height: 100%;
                color: #ffffff;
            }
            .hVvTOh>li>a>svg {
                fill: #ffffff;
            }
            .hVvTOh>li>ul {
                position: absolute;
                display: none;
                list-style: none;
                margin: 0;
                padding: 0;
                white-space: nowrap;
            }
            .hVvTOh>li:hover>ul {
                display: block;
            }
            .hVvTOh>li>ul>li>a {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                color: #ffffff;
                background-color: #1c1c1c;
                -webkit-text-decoration: none;
                text-decoration: none;
                font-size: 16px;
                line-height: 16px;
                height: 16px;
                padding: 12px;
            }
        }

        /* sc-component-id: sc-cooIXK */

        @media screen and (min-width:0px) and (max-width:959px) {
            .iweeuu {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            .iweeuu .topMenu {
                font-weight: bold;
                padding-left: 0;
            }
            .iweeuu ul {
                list-style: none;
                margin: 0;
                padding: 0;
                width: 100%;
            }
            .iweeuu a {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-text-decoration: none;
                text-decoration: none;
                color: #1c1c1c;
                font-size: 16px;
                height: 16px;
                padding: 12px 0 12px 12px;
                width: 100vw;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iweeuu {
                position: relative;
                z-index: 150;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                margin: 0 0 0 10px;
                padding: 0;
            }
            .iweeuu>li {
                display: inline-block;
            }
            .iweeuu>li>a {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-text-decoration: none;
                text-decoration: none;
                font-size: 16px;
                line-height: 16px;
                height: 100%;
                color: #ffffff;
            }
            .iweeuu>li>a>svg {
                fill: #ffffff;
            }
            .iweeuu>li>ul {
                position: absolute;
                display: none;
                list-style: none;
                margin: 0;
                padding: 0;
                white-space: nowrap;
            }
            .iweeuu>li:hover>ul {
                display: block;
            }
            .iweeuu>li>ul>li>a {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                color: #ffffff;
                background-color: #1c1c1c;
                -webkit-text-decoration: none;
                text-decoration: none;
                font-size: 16px;
                line-height: 16px;
                height: 16px;
                padding: 12px;
            }
        }

        /* sc-component-id: sc-fcdeBU */

        .igvagH {
            width: 20px;
            height: 17px;
        }

        /* sc-component-id: sc-gmeYpB */

        .bLLCOc {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            padding-right: 12px;
        }

        .bLLCOc svg {
            fill: #1c1c1c;
            width: 20px;
            height: 17px;
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .bLLCOc svg {
                fill: #ffffff;
            }
        }

        /* sc-component-id: sc-kZmsYB */

        .jvVwcU {
            width: 100%;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .jvVwcU {
                display: none;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .jvVwcU {
                height: 40px;
                min-height: 40px;
            }
        }

        /* sc-component-id: sc-RcBXQ */

        .cKhWBj {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .cKhWBj {
                height: 40px;
                min-height: 40px;
            }
        }

        @media screen and (min-width:320px) and (max-width:959px) {
            .cKhWBj {
                margin-top: 8px;
            }
        }

        /* sc-component-id: sc-iSDuPN */

        .eggDyf {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        /* sc-component-id: sc-fQejPQ */

        @media screen and (min-width:0px) and (max-width:959px) {
            .kehUQb {
                overflow-y: scroll;
                position: fixed;
                top: 100px;
                left: 0;
                z-index: 140;
                width: 100%;
            }
            .kehUQb.expanded {
                background-color: rgba(0, 0, 0, 0.8);
                bottom: 0;
                height: 100%;
            }
            .kehUQb.sticky {
                position: fixed;
                top: 40px;
                width: 100%;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .kehUQb {
                position: -webkit-sticky;
                position: sticky;
                top: 80px;
                padding: 20px 0;
            }
        }

        /* sc-component-id: sc-clNaTc */

        .etGqOS {
            background-color: #1c1c1c;
            color: #ffffff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            height: 54px;
            padding: 0 20px;
            position: relative;
            font-family: 'Asap', sans-serif;
            font-size: 15px;
            font-weight: 600;
            margin: 0;
        }

        .etGqOS svg {
            fill: #ffffff;
            height: 16px;
            float: right;
        }

        .collapsed .etGqOS .cd svg {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        @media screen and (min-width:959px) and (max-width:99999px) {
            .etGqOS {
                border-radius: 5px 5px 0 0;
            }
            .etGqOS .cd svg {
                display: none;
            }
        }

        /* sc-component-id: sc-etwtAo */

        .duoXbz {
            border-width: 0 1px 1px 1px;
            border-color: #c7c7c7;
            border-style: solid;
            position: relative;
            overflow: hidden;
            min-height: 100px;
            background-color: white;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .collapsed .duoXbz {
                min-height: 0;
                height: 0;
                padding: 0;
            }
        }

        /* sc-component-id: sc-eInJlc */

        .bhlVXn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -webkit-justify-content: start;
            -ms-flex-pack: start;
            justify-content: start;
        }

        /* sc-component-id: sc-gtfDJT */

        .dtbQky {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -webkit-justify-content: end;
            -ms-flex-pack: end;
            justify-content: end;
        }

        /* sc-component-id: sc-fOICqy */

        .dMDuep {
            font-size: 48px;
            margin-top: -8px;
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dMDuep {
                display: none;
            }
        }

        /* sc-component-id: sc-hzDEsm */

        @media screen and (min-width:0px) and (max-width:959px) {
            .voJyf {
                display: inline-block;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .voJyf {
                display: none;
            }
        }

        /* sc-component-id: sc-jtRlXQ */

        .eXJFU>svg {
            width: 32px;
            height: 32px;
        }

        .eXJFU>svg {
            fill: #ffffff;
        }

        /* sc-component-id: sc-cEvuZC */

        @media screen and (min-width:768px) and (max-width:99999px) {
            .hfESEv {
                display: none;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hfESEv {
                display: block;
                min-height: 88px;
                width: 100%;
            }
        }

        /* sc-component-id: sc-kNBZmU */

        .iqbpwL {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            border: 1px solid #c7c7c7;
            margin-top: -1px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .iqbpwL {
                padding: 0px 17px 17px 17px;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-align-items: strech;
                -webkit-box-align: strech;
                -ms-flex-align: strech;
                align-items: strech;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .iqbpwL {
                padding: 0px 33px 0px 33px;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iqbpwL {
                padding: 0px 33px 0px 33px;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .iqbpwL {
                margin-top: -1px;
                margin-bottom: 0px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .iqbpwL {
                margin-top: -1px;
                margin-bottom: 0px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iqbpwL {
                margin-top: -1px;
                margin-bottom: 0px;
            }
        }

        /* sc-component-id: sc-eEieub */

        .ePfoOR {
            padding-top: 17px;
            padding-bottom: 17px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ePfoOR {
                -webkit-flex: 1;
                -ms-flex: 1;
                flex: 1;
                -webkit-flex: 1;
                padding-bottom: 0px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .ePfoOR {
                -webkit-flex: 0.5;
                -ms-flex: 0.5;
                flex: 0.5;
                -webkit-flex: 0.5;
                margin: auto;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .ePfoOR {
                -webkit-flex: 0.5;
                -ms-flex: 0.5;
                flex: 0.5;
                -webkit-flex: 0.5;
                margin: auto;
            }
        }

        /* sc-component-id: sc-hMrMfs */

        .cYtdDz {
            -webkit-flex: 2;
            -ms-flex: 2;
            flex: 2;
            -webkit-flex: 2;
            text-align: -webkit-left;
            text-align: left;
            -webkit-align-self: start;
            -ms-flex-item-align: start;
            align-self: start;
        }

        @media screen and (min-width:0px) and (max-width:767px) {}

        @media screen and (min-width:768px) and (max-width:959px) {
            .cYtdDz {
                margin-right: 20px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .cYtdDz {
                margin-right: 20px;
            }
        }

        /* sc-component-id: sc-drlKqa */

        .bWkNAB {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-flex: 1;
            text-align: -webkit-right;
            text-align: right;
        }

        /* sc-component-id: sc-jotlie */

        .FdyAz {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 100px;
        }

        /* sc-component-id: sc-fdQOMr */

        .egHHqM {
            text-align: center;
        }

        /* sc-component-id: sc-izvnbC */

        .fGPvLs>svg {
            width: 263.29px;
            height: 134.75px;
        }

        /* sc-component-id: sc-cgzHhG */

        .cVEiUH>svg {
            width: 447.85px;
            height: 152.22px;
        }

        /* sc-component-id: sc-idjmjb */

        .gcksJJ {
            cursor: pointer;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100px;
            height: 42px;
            border-radius: 21px;
            font-family: Roboto;
            font-size: 16px;
            font-weight: bold;
            line-height: 19px;
            text-align: center;
            color: #FFFFFF;
            box-sizing: border-box;
            margin: 8px 8px 8px 0;
            background-color: #f57e22;
        }

        .gGfiDU {
            cursor: pointer;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100px;
            height: 42px;
            border-radius: 21px;
            font-family: Roboto;
            font-size: 16px;
            font-weight: bold;
            line-height: 19px;
            text-align: center;
            color: #FFFFFF;
            box-sizing: border-box;
            margin: 8px 8px 8px 0;
            border: 1.2px solid #FFFFFF;
        }

        /* sc-component-id: sc-fHlXLc */

        .hYijQi {
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
        }

        /* sc-component-id: sc-iKpIOp */

        .dwFifh>svg {
            width: 44px;
            height: 42px;
        }

        .dwFifh>svg {
            fill: #ffffff;
        }

        /* sc-component-id: sc-AqAhp */

        .dnXTSD {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            cursor: pointer;
            color: #81b227;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            color: #f57e22;
        }

        .dnXTSD:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .dnXTSD {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .dnXTSD {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dnXTSD {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-cClmTo */

        .fNzyXB {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            color: #ffffff;
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .fNzyXB {
                font-size: 15px;
                font-weight: 200;
            }
        }

        /* sc-component-id: sc-cZLAbK */

        .ficvqV {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: auto;
            box-sizing: border-box;
            -webkit-text-decoration: none;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            font-family: 'Asap', sans-serif;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase;
            -webkit-letter-spacing: 0.7px;
            -moz-letter-spacing: 0.7px;
            -ms-letter-spacing: 0.7px;
            letter-spacing: 0.7px;
            color: #81b227;
            background: none;
            border: 1px solid #81b227;
            width: 100%;
            border: none;
            color: #ffffff;
            background: #007CC2;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ficvqV {
                height: 48px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .ficvqV {
                height: 56px;
            }
        }

        .ficvqV:hover {
            color: #ffffff;
            background: #81b227;
        }

        .ficvqV:focus {
            outline: none;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .ficvqV:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: none;
            border: 1px solid #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ficvqV {
                height: 48px;
                min-width: 69px;
                font-size: 16px;
                padding: 10px;
                line-height: 1.5;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .ficvqV {
                height: 56px;
                min-width: 90px;
                font-size: 18px;
                padding: 10px;
                line-height: 1.33;
            }
        }

        @media screen and (min-width:320px) and (max-width:959px) {
            .ficvqV {
                padding-top: 5px;
            }
        }

        .ficvqV:hover {
            color: #ffffff;
            background: #005194;
        }

        /* sc-component-id: sc-iVOTot */

        .ggGkHu {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: auto;
            box-sizing: border-box;
            -webkit-text-decoration: none;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            font-family: 'Asap', sans-serif;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase;
            -webkit-letter-spacing: 0.7px;
            -moz-letter-spacing: 0.7px;
            -ms-letter-spacing: 0.7px;
            letter-spacing: 0.7px;
            color: #81b227;
            background: none;
            border: 1px solid #81b227;
            width: 100%;
            border: none;
            color: #ffffff;
            background: #007CC2;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ggGkHu {
                height: 48px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .ggGkHu {
                height: 56px;
            }
        }

        .ggGkHu:hover {
            color: #ffffff;
            background: #81b227;
        }

        .ggGkHu:focus {
            outline: none;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .ggGkHu:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: none;
            border: 1px solid #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ggGkHu {
                height: 48px;
                min-width: 69px;
                font-size: 16px;
                padding: 10px;
                line-height: 1.5;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .ggGkHu {
                height: 56px;
                min-width: 90px;
                font-size: 18px;
                padding: 10px;
                line-height: 1.33;
            }
        }

        @media screen and (min-width:320px) and (max-width:959px) {
            .ggGkHu {
                padding-top: 5px;
            }
        }

        .ggGkHu:hover {
            color: #ffffff;
            background: #005194;
        }

        /* sc-component-id: sc-fYAFcb */

        .kwqaNo {
            display: block;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 40px;
            min-height: 40px;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .kwqaNo {
                margin: 0 16px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .kwqaNo {
                margin: 0 36px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .kwqaNo {
                margin: 0 64px;
            }
        }

        @media screen and (min-width:0px) and (max-width:960px) {
            .kwqaNo .hideOnMobile {
                display: none;
            }
        }

        /* sc-component-id: sc-kAKrxA */

        .jeYRnq {
            text-align: center;
            color: white;
        }

        /* sc-component-id: sc-lhLRcH */

        .iZeZLy {
            width: 100%;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .iZeZLy {
                height: 40px;
                background-color: rgba(0, 0, 0, 0.5);
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iZeZLy {
                display: none;
            }
        }

        /* sc-component-id: sc-ccvjgv */

        .euNjUW {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .euNjUW {
                height: 40px;
                min-height: 40px;
            }
        }

        /* sc-component-id: sc-fNHLbd */

        .liWZCr {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .liWZCr {
                display: block;
            }
        }

        /* sc-component-id: sc-hSmEHG */

        .iqGfok {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        /* sc-component-id: sc-ePDpFu */

        @media screen and (min-width:768px) and (max-width:99999px) {
            .hdxerj {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
                -webkit-align-items: flex-end;
                -webkit-box-align: flex-end;
                -ms-flex-align: flex-end;
                align-items: flex-end;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }
        }

        /* sc-component-id: sc-ijhsb */

        .zhpQy {
            padding-top: 16px;
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .zhpQy {
                min-width: 360px;
            }
        }

        /* sc-component-id: sc-gohEOc */

        .jhuupG {
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: #ffffff;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .jhuupG {
                background-image: url(/dist/assets/tyresales-tyre-search-background-01.4e99090e21802338c22de34f2f1834dd.jpg);
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .jhuupG {
                background-image: url(/dist/assets/tyresales-tyre-search-background-01.4e99090e21802338c22de34f2f1834dd.jpg);
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .jhuupG {
                background-image: url(/dist/assets/tyresales-tyre-search-background-01.4e99090e21802338c22de34f2f1834dd.jpg);
            }
        }

        /* sc-component-id: sc-gKLXLV */

        .eAmrak {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            margin: 0;
            color: #ffffff;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .eAmrak {
                font-size: 56px;
                line-height: 54px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .eAmrak {
                font-size: 76px;
                line-height: 70px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .eAmrak {
                font-size: 96px;
                line-height: 88px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .eAmrak {
                font-size: 36px;
                line-height: 39px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .eAmrak {
                font-size: 56px;
                line-height: 55px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .eAmrak {
                font-size: 66px;
                line-height: 73px;
            }
        }

        @media {
            .eAmrak {
                margin-top: 42px;
            }
        }

        /* sc-component-id: sc-bvCTgw */

        .jmkjzV {
            color: #ffffff;
            margin: 0;
            line-height: 1;
            font-family: 'Asap', sans-serif;
            text-align: right;
        }

        /* sc-component-id: sc-gCKARq */

        .lbYeIW {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            cursor: pointer;
            color: #81b227;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            color: #f57e22;
        }

        .lbYeIW:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .lbYeIW {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .lbYeIW {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .lbYeIW {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-fjdPjP */

        .eEajxe {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 42px;
            font-family: Roboto;
            font-size: 16px;
            font-weight: bold;
            line-height: 19px;
            text-align: center;
            color: #ffffff;
            box-sizing: border-box;
            margin: 8px 8px 8px 0;
        }

        /* sc-component-id: sc-dWcDbm */

        .cBoTKu {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            cursor: pointer;
            color: #81b227;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
        }

        .cBoTKu:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .cBoTKu {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .cBoTKu {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .cBoTKu {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-esExBO */

        .lglItX {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            font-weight: 400;
            margin-block-start: 10px;
            margin-block-end: 10px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .lglItX {
                font-size: 22px;
                line-height: 22px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .lglItX {
                font-size: 24px;
                line-height: 24px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .lglItX {
                font-size: 26px;
                line-height: 26px;
            }
        }

        /* sc-component-id: sc-ctwKVn */

        .hOSAQB {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            font-weight: 400;
            color: #007CC2;
            margin-block-start: 10px;
            margin-block-end: 10px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hOSAQB {
                font-size: 22px;
                line-height: 22px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hOSAQB {
                font-size: 24px;
                line-height: 24px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hOSAQB {
                font-size: 26px;
                line-height: 26px;
            }
        }

        /* sc-component-id: sc-csZoYU */

        .jbFocL {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            font-weight: 200;
            text-transform: uppercase;
            margin-block-start: 10px;
            margin-block-end: 20px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .jbFocL {
                font-size: 16px;
                line-height: 16px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .jbFocL {
                font-size: 18px;
                line-height: 18px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .jbFocL {
                font-size: 18px;
                line-height: 18px;
            }
        }

        /* sc-component-id: sc-dpiBDp */

        .gXPJGx {
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
        }

        /* sc-component-id: sc-hENMEE */

        .hxhBqi {
            margin-top: 50px;
        }

        /* sc-component-id: sc-dCaJBF */

        .kacPXD {
            width: 124px;
            height: 124px;
        }

        .kacPXD svg {
            margin-top: 20px;
            width: 124px;
            height: 124px;
        }

        /* sc-component-id: sc-cXHFlN */

        .igAzzp {
            text-align: center;
        }

        @media screen and (min-width:0px) and (max-width:767px) {}

        @media screen and (min-width:768px) and (max-width:959px) {
            .igAzzp {
                text-align: left;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {}

        /* sc-component-id: sc-ihiiSJ */

        .ljOKRd {
            margin: 25px 0px 25px 0px;
        }

        /* sc-component-id: sc-gJTSre */

        .isQobd {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .isQobd {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .isQobd {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        /* sc-component-id: sc-fdqjUm */

        .bLFwIG {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            border: 1px solid #c7c7c7;
            text-align: left;
            padding: 32px;
            margin: 10px;
            position: relative;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bLFwIG {
                margin-right: 0px;
                margin-left: 0px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {}

        @media screen and (min-width:960px) and (max-width:99999px) {
            .bLFwIG:last-of-type {
                margin-right: 0px;
            }
            .bLFwIG:first-of-type {
                margin-left: 0px;
            }
        }

        /* sc-component-id: sc-cLmFfZ */

        @media screen and (min-width:0px) and (max-width:767px) {
            .ieQHCE {
                height: 50px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {}

        @media screen and (min-width:960px) and (max-width:99999px) {
            .ieQHCE {
                height: 30px;
            }
        }

        /* sc-component-id: sc-eAyhxF */

        .kcmAmW {
            position: absolute;
            right: 0px;
            bottom: 0px;
            margin: 0px 32px 32px 0px;
        }

        /* sc-component-id: sc-kbdWBx */

        .kwIYhb {
            width: 24px;
            height: 24px;
        }

        .kwIYhb>svg {
            width: 32px;
            height: 32px;
        }

        .kwIYhb svg {
            width: 24px;
            height: 24px;
        }

        .kwIYhb svg path {
            fill: #007CC2;
        }

        /* sc-component-id: sc-eVrGFk */

        .cOKhfV {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            font-weight: 600;
            text-align: left;
            margin-block-start: 10px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .cOKhfV {
                font-size: 38px;
                line-height: 38px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .cOKhfV {
                font-size: 44px;
                line-height: 44px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .cOKhfV {
                font-size: 52px;
                line-height: 52px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .cOKhfV {
                font-size: 26px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .cOKhfV {
                font-size: 36px;
                line-height: 40px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .cOKhfV {
                font-size: 46px;
                line-height: 58px;
            }
        }

        /* sc-component-id: sc-iNovjJ */

        .czzCgR {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            font-weight: 400;
            color: #007CC2;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .czzCgR {
                font-size: 26px;
                line-height: 26px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .czzCgR {
                font-size: 30px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .czzCgR {
                font-size: 32px;
                line-height: 32px;
            }
        }

        /* sc-component-id: sc-kyCyAI */

        .hYbIdV {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            font-weight: 600;
            text-align: left;
            margin-block-start: 5px;
            margin-block-end: 5px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hYbIdV {
                font-size: 20px;
                line-height: 20px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hYbIdV {
                font-size: 22px;
                line-height: 22px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hYbIdV {
                font-size: 22px;
                line-height: 22px;
            }
        }

        /* sc-component-id: sc-fEVUGC */

        .hEJWUH {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            line-height: 1.5 !important;
            margin: 15px 0 !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hEJWUH {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hEJWUH {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hEJWUH {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hEJWUH {
                padding: 0px 5px 0px 5px;
                line-height: 1.6 !important;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hEJWUH {
                padding: 0px 25px 0px 25px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hEJWUH {
                padding: 0px 45px 0px 45px;
            }
        }

        /* sc-component-id: sc-dchYKM */

        @media screen and (min-width:0px) and (max-width:767px) {
            .dXOtzf {
                margin: 40px 0px 25px 0px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .dXOtzf {
                margin: 40px 0px 25px 0px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dXOtzf {
                margin: 30px 0px 25px 0px;
            }
        }

        /* sc-component-id: sc-jLrYHE */

        .fZMbDJ {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            border: 1px solid #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .fZMbDJ {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        /* sc-component-id: sc-dhVevo */

        .Ibtok {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
        }

        /* sc-component-id: sc-fqCOlO */

        .eFFRCx {
            display: inline-block;
            font-family: 'Asap', sans-serif;
            font-size: 20px;
            font-weight: 600;
            -webkit-transform: translateX(-35px);
            -ms-transform: translateX(-35px);
            transform: translateX(-35px);
        }

        /* sc-component-id: sc-BOulX */

        .jslbUN {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            position: relative;
            margin-top: 20px;
        }

        /* sc-component-id: sc-hAcydR */

        .jdXyGj {
            -webkit-flex: 2;
            -ms-flex: 2;
            flex: 2;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 15px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .jdXyGj {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                margin: 10px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .jdXyGj {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-flex: 2;
                -ms-flex: 2;
                flex: 2;
            }
        }

        /* sc-component-id: sc-eomEcv */

        .bBlENg {
            width: 60px;
            height: 60px;
        }

        .bBlENg svg {
            width: 60px;
            height: 60px;
            fill: #007CC2;
        }

        /* sc-component-id: sc-gcJTYu */

        .ieQjjv {
            width: 60px;
            height: 60px;
        }

        .ieQjjv svg {
            width: 60px;
            height: 60px;
            fill: #007CC2;
        }

        /* sc-component-id: sc-iBfVdv */

        .jCxqPJ {
            width: 60px;
            height: 60px;
        }

        .jCxqPJ svg {
            width: 60px;
            height: 60px;
            fill: #007CC2;
        }

        /* sc-component-id: sc-cCbPEh */

        .gIUopi {
            width: 60px;
            height: 60px;
        }

        .gIUopi svg {
            width: 60px;
            height: 60px;
            fill: #007CC2;
        }

        /* sc-component-id: sc-eklfrZ */

        .lfeUTI {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            font-weight: 600;
            text-align: left;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .lfeUTI {
                font-size: 38px;
                line-height: 38px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .lfeUTI {
                font-size: 44px;
                line-height: 44px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .lfeUTI {
                font-size: 52px;
                line-height: 52px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .lfeUTI {
                font-size: 26px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .lfeUTI {
                font-size: 36px;
                line-height: 40px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .lfeUTI {
                font-size: 46px;
                line-height: 58px;
            }
        }

        /* sc-component-id: sc-csSMhA */

        .jAEoqZ {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            font-weight: 400;
            color: #ffffff;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .jAEoqZ {
                font-size: 26px;
                line-height: 26px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .jAEoqZ {
                font-size: 30px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .jAEoqZ {
                font-size: 32px;
                line-height: 32px;
            }
        }

        /* sc-component-id: sc-bscRGj */

        .KAVfe {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            color: #ffffff;
            line-height: 1.5 !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .KAVfe {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .KAVfe {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .KAVfe {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .KAVfe {
                padding: 0px 5px 0px 5px;
                line-height: 1.6 !important;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .KAVfe {
                padding: 0px 25px 0px 25px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .KAVfe {
                padding: 0px 45px 0px 45px;
            }
        }

        /* sc-component-id: sc-hlELIx */

        .VtmMA {
            margin: 25px 0px 25px 0px;
        }

        /* sc-component-id: sc-erOsFi */

        .hVSFz {
            -webkit-flex: 2;
            -ms-flex: 2;
            flex: 2;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 15px;
            border: 1px solid #007CC2;
            position: relative;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hVSFz {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                margin: 10px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hVSFz {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-flex: 2;
                -ms-flex: 2;
                flex: 2;
            }
        }

        /* sc-component-id: sc-eGXxtx */

        .hDQRjI {
            -webkit-flex: 2;
            -ms-flex: 2;
            flex: 2;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 15px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hDQRjI {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                margin: 10px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hDQRjI {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-flex: 2;
                -ms-flex: 2;
                flex: 2;
            }
        }

        /* sc-component-id: sc-eetwQk */

        .hKujGL {
            background-color: #007CC2;
            color: #1c1c1c;
            position: absolute;
            text-transform: uppercase;
            font-weight: bold;
            left: 0px;
            top: 0px;
            padding: 3px 10px 3px 10px;
        }

        /* sc-component-id: sc-cIwbeI */

        .cIOAaM {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            background-color: #1c1c1c;
            text-align: center;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .cIOAaM {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        /* sc-component-id: sc-dUcZlc */

        .bUujWC {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            position: relative;
            padding-top: 40px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bUujWC {
                padding: 50px 18px 18px 18px;
            }
        }

        /* sc-component-id: sc-fdJbru */

        .jdilUM {
            width: 50px;
            height: 50px;
        }

        .jdilUM svg {
            height: 50px;
            width: 50px;
        }

        .jdilUM svg path {
            fill: #007CC2;
        }

        /* sc-component-id: sc-dYcyhn */

        .jKIDIz {
            width: 50px;
            height: 50px;
        }

        .jKIDIz svg {
            height: 50px;
            width: 50px;
        }

        .jKIDIz svg circle {
            stroke: #007CC2;
        }

        .jKIDIz svg path {
            stroke: #007CC2;
        }

        .jKIDIz svg polygon {
            stroke: #007CC2;
        }

        .jKIDIz svg rect {
            stroke: #007CC2;
        }

        /* sc-component-id: sc-cIbcTr */

        .nPaqi {
            width: 50px;
            height: 50px;
        }

        .nPaqi svg {
            height: 50px;
            width: 50px;
        }

        .nPaqi svg circle {
            stroke: #007CC2;
        }

        .nPaqi svg path {
            stroke: #007CC2;
        }

        .nPaqi svg polygon {
            stroke: #007CC2;
        }

        .nPaqi svg rect {
            stroke: #007CC2;
        }

        /* sc-component-id: sc-hmyDHa */

        .iUXEz {
            width: 50px;
            height: 50px;
        }

        .iUXEz>svg {
            width: 72px;
            height: 26px;
        }

        .iUXEz svg {
            height: 50px;
            width: 50px;
        }

        .iUXEz svg {
            width: 80px;
        }

        .iUXEz svg path {
            fill: #007CC2;
        }

        /* sc-component-id: sc-fAfrNB */

        .fimZGu {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            cursor: pointer;
            color: #81b227;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .fimZGu:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .fimZGu {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .fimZGu {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .fimZGu {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-cKZAiZ */

        .hYECGi {
            font-family: "Asap", sans-serif;
            text-align: center;
        }

        /* sc-component-id: sc-jJkQYJ */

        .fIxOVQ {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: auto;
            box-sizing: border-box;
            -webkit-text-decoration: none;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            font-family: 'Asap', sans-serif;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase;
            -webkit-letter-spacing: 0.7px;
            -moz-letter-spacing: 0.7px;
            -ms-letter-spacing: 0.7px;
            letter-spacing: 0.7px;
            color: #81b227;
            background: none;
            border: 1px solid #81b227;
            width: 100%;
            border: none;
            color: #ffffff;
            background: #007CC2;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .fIxOVQ {
                height: 48px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .fIxOVQ {
                height: 56px;
            }
        }

        .fIxOVQ:hover {
            color: #ffffff;
            background: #81b227;
        }

        .fIxOVQ:focus {
            outline: none;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .fIxOVQ:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: none;
            border: 1px solid #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .fIxOVQ {
                height: 48px;
                min-width: 69px;
                font-size: 16px;
                padding: 10px;
                line-height: 1.5;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .fIxOVQ {
                height: 56px;
                min-width: 90px;
                font-size: 18px;
                padding: 10px;
                line-height: 1.33;
            }
        }

        @media screen and (min-width:320px) and (max-width:959px) {
            .fIxOVQ {
                padding-top: 5px;
            }
        }

        .fIxOVQ:hover {
            color: #ffffff;
            background: #005194;
        }

        /* sc-component-id: sc-kOnlKp */

        .jwwlXZ {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: auto;
            box-sizing: border-box;
            -webkit-text-decoration: none;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            font-family: 'Asap', sans-serif;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase;
            -webkit-letter-spacing: 0.7px;
            -moz-letter-spacing: 0.7px;
            -ms-letter-spacing: 0.7px;
            letter-spacing: 0.7px;
            color: #81b227;
            background: none;
            border: 1px solid #81b227;
            width: 100%;
            border: none;
            color: #ffffff;
            background: #007CC2;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .jwwlXZ {
                height: 48px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .jwwlXZ {
                height: 56px;
            }
        }

        .jwwlXZ:hover {
            color: #ffffff;
            background: #81b227;
        }

        .jwwlXZ:focus {
            outline: none;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .jwwlXZ:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: none;
            border: 1px solid #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .jwwlXZ {
                height: 40px;
                min-width: 69px;
                font-size: 14px;
                padding: 7px;
                line-height: 1.71;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .jwwlXZ {
                height: 48px;
                min-width: 90px;
                font-size: 16px;
                padding: 7px;
                line-height: 1.5;
            }
        }

        @media screen and (min-width:320px) and (max-width:959px) {
            .jwwlXZ {
                padding-top: 5px;
            }
        }

        .jwwlXZ:hover {
            color: #ffffff;
            background: #005194;
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .jwwlXZ {
                height: 56px;
            }
        }

        /* sc-component-id: sc-klSiHT */

        .irEmfL {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .irEmfL {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        /* sc-component-id: sc-bWFPNQ */

        .epsSgc {
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: #1c1c1c;
        }

        /* sc-component-id: sc-cBOTKl */

        .jEPgrt {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 42px;
            font-family: Roboto;
            font-size: 16px;
            font-weight: bold;
            line-height: 19px;
            text-align: center;
            color: #ffffff;
            box-sizing: border-box;
            margin: 8px 8px 8px 0;
        }

        /* sc-component-id: sc-iKiVwC */

        .jhSAbk {
            border-width: 0 1px 1px 1px;
            border-style: solid;
            position: relative;
            overflow: hidden;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .jhSAbk {
                min-height: 80px;
            }
            .collapsed .jhSAbk {
                min-height: 0;
                height: 0;
                padding: 0;
            }
        }

        /* sc-component-id: sc-guDjWT */

        .akHPI {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .akHPI {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .akHPI.expanded {
                background-color: rgba(0, 0, 0, 0.8);
                bottom: 0;
                height: 100%;
            }
        }

        /* sc-component-id: sc-kqEXUp */

        .iXRWeA {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .iXRWeA {
                -webkit-flex: 1 0 auto;
                -ms-flex: 1 0 auto;
                flex: 1 0 auto;
            }
        }

        /* sc-component-id: sc-gxbSSY */

        .lcgrgW {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        @media screen and (min-width:0px) and (max-width:960px) {
            .lcgrgW {
                -webkit-flex: 1;
                -ms-flex: 1;
                flex: 1;
            }
        }

        /* sc-component-id: sc-bXopBW */

        @media screen and (min-width:960px) and (max-width:99999px) {
            .lmsxtl {
                display: none;
            }
        }

        @media screen and (min-width:0px) and (max-width:960px) {
            .lmsxtl {
                font-size: 45px;
                font-family: "Asap", sans-serif;
                font-weight: 600;
                color: #ffffff;
            }
        }

        /* sc-component-id: sc-hhaNoI */

        .ifqUjI {
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: #1c1c1c;
        }

        /* sc-component-id: sc-gneEKw */

        .kIzNIc {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 42px;
            font-family: Roboto;
            font-size: 16px;
            font-weight: bold;
            line-height: 19px;
            text-align: center;
            color: #ffffff;
            box-sizing: border-box;
            margin: 8px 8px 8px 0;
        }

        /* sc-component-id: sc-kFLxrv */

        .cQJAJn {
            font-family: 'Asap', sans-serif;
            character-space: 0;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .cQJAJn {
                font-size: 56px;
                line-height: 54px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .cQJAJn {
                font-size: 76px;
                line-height: 70px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .cQJAJn {
                font-size: 96px;
                line-height: 88px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .cQJAJn {
                font-size: 36px;
                line-height: 39px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .cQJAJn {
                font-size: 56px;
                line-height: 55px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .cQJAJn {
                font-size: 66px;
                line-height: 73px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .cQJAJn {
                font-size: 26px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .cQJAJn {
                font-size: 36px;
                line-height: 40px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .cQJAJn {
                font-size: 46px;
                line-height: 58px;
            }
        }

        /* sc-component-id: sc-boCWhm */

        .jZOUoT {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
            box-sizing: border-box;
            -webkit-text-decoration: none;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            font-family: 'Asap', sans-serif;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase;
            -webkit-letter-spacing: 0.7px;
            -moz-letter-spacing: 0.7px;
            -ms-letter-spacing: 0.7px;
            letter-spacing: 0.7px;
            color: #ffffff;
            background: #81b227;
            border: none;
            max-width: 300px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .jZOUoT {
                height: 48px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .jZOUoT {
                height: 56px;
            }
        }

        .jZOUoT:hover {
            color: #ffffff;
            background: #659016;
        }

        .jZOUoT:focus {
            outline: none;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .jZOUoT:disabled {
            cursor: not-allowed;
            color: #ffffff;
            background: #c7c7c7;
            border: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .jZOUoT {
                height: 40px;
                min-width: 69px;
                font-size: 14px;
                padding: 7px;
                line-height: 1.71;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .jZOUoT {
                height: 48px;
                min-width: 90px;
                font-size: 16px;
                padding: 7px;
                line-height: 1.5;
            }
        }

        /* sc-component-id: sc-cIsjWt */

        .eaEDFG {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        /* sc-component-id: sc-hQfrgq */

        .eulRjT {
            color: #1c1c1c;
            font-family: 'Asap', sans-serif;
            character-space: 0.5;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .eulRjT {
                font-size: 15px;
                line-height: 28px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .eulRjT {
                font-size: 16px;
                line-height: 32px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .eulRjT {
                font-size: 16px;
                line-height: 36px;
                margin: 16px 0;
            }
        }

        /* sc-component-id: sc-OnmeF */

        .bbYAIw {
            color: #1c1c1c;
            font-family: 'Asap', sans-serif;
            character-space: 0.5;
            list-style-type: lower-alpha;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bbYAIw {
                font-size: 15px;
                line-height: 28px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .bbYAIw {
                font-size: 16px;
                line-height: 32px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .bbYAIw {
                font-size: 16px;
                line-height: 36px;
                margin: 16px 0;
            }
        }

        /* sc-component-id: sc-fxMfqs */

        .cSfIry {
            color: #1c1c1c;
            font-family: 'Asap', sans-serif;
            character-space: 0.5;
            list-style-type: lower-roman;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .cSfIry {
                font-size: 15px;
                line-height: 28px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .cSfIry {
                font-size: 16px;
                line-height: 32px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .cSfIry {
                font-size: 16px;
                line-height: 36px;
                margin: 16px 0;
            }
        }

        /* sc-component-id: sc-dcmekm */

        .ezmLCO {
            text-align: center;
        }

        /* sc-component-id: sc-fepxGN */

        .fMpsBs {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            font-size: 20px !important;
            line-height: 0px !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .fMpsBs {
                font-size: 26px;
                line-height: 26px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .fMpsBs {
                font-size: 30px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .fMpsBs {
                font-size: 32px;
                line-height: 32px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .fMpsBs {
                font-size: 18px;
                line-height: 25px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .fMpsBs {
                font-size: 26px;
                line-height: 40px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .fMpsBs {
                font-size: 26px;
                line-height: 43px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .fMpsBs {
                font-size: 14px !important;
            }
        }

        /* sc-component-id: sc-bAtgIc */

        .ePOqpS {
            border: 1px solid #c7c7c7;
            border-bottom: 0;
            box-sizing: border-box;
            color: #595959;
            font-family: "Asap", sans-serif;
        }

        .ePOqpS:last-of-type {
            border-bottom: 1px solid #c7c7c7;
        }

        /* sc-component-id: sc-csuNZv */

        .ckQAnf {
            background-color: #ebebeb;
            box-sizing: border-box;
            color: #1c1c1c;
            cursor: pointer;
            font-weight: 600;
            padding-bottom: 0;
            position: relative;
            text-align: left;
        }

        /* sc-component-id: sc-eghKGU */

        .bbYeww {
            padding: 24px;
        }

        /* sc-component-id: sc-fUKxqW */

        .hOOSoa {
            display: inline-block;
            width: 24px;
            height: 12px;
            position: absolute;
            top: 50%;
            right: 16px;
        }

        .hOOSoa:before,
        .hOOSoa:after {
            background-color: currentColor;
            content: "";
            display: block;
            height: 2px;
            position: absolute;
            -webkit-transition: -webkit-transform 0.25s ease;
            -webkit-transition: transform 0.25s ease;
            transition: transform 0.25s ease;
            width: 10px;
        }

        .hOOSoa:before {
            left: 4px;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .hOOSoa:after {
            right: 4px;
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .hOOSoa:before {
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .hOOSoa:after {
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .jztvBx {
            display: inline-block;
            width: 24px;
            height: 12px;
            position: absolute;
            top: 50%;
            right: 16px;
        }

        .jztvBx:before,
        .jztvBx:after {
            background-color: currentColor;
            content: "";
            display: block;
            height: 2px;
            position: absolute;
            -webkit-transition: -webkit-transform 0.25s ease;
            -webkit-transition: transform 0.25s ease;
            transition: transform 0.25s ease;
            width: 10px;
        }

        .jztvBx:before {
            left: 4px;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .jztvBx:after {
            right: 4px;
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        /* sc-component-id: sc-kwclOP */

        .hOvXHt {
            display: block;
            background-color: #ffffff;
            padding: 0 18px 18px 18px;
        }

        .hOvXHt ul {
            list-style: none;
            margin-bottom: 0;
            margin-top: 0;
        }

        .hOvXHt ul a {
            color: #595959;
        }

        .hOvXHt ul a:active,
        .hOvXHt ul a:hover {
            color: #595959;
        }

        .dyeCjc {
            display: none;
            background-color: #ffffff;
            padding: 0 18px 18px 18px;
        }

        .dyeCjc ul {
            list-style: none;
            margin-bottom: 0;
            margin-top: 0;
        }

        .dyeCjc ul a {
            color: #595959;
        }

        .dyeCjc ul a:active,
        .dyeCjc ul a:hover {
            color: #595959;
        }

        /* sc-component-id: sc-bWkBrx */

        .SCqky {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            color: #007CC2;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .SCqky {
                font-size: 38px;
                line-height: 38px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .SCqky {
                font-size: 44px;
                line-height: 44px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .SCqky {
                font-size: 52px;
                line-height: 52px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .SCqky {
                font-size: 26px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .SCqky {
                font-size: 36px;
                line-height: 40px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .SCqky {
                font-size: 46px;
                line-height: 58px;
            }
        }

        /* sc-component-id: sc-lccPpP */

        @media screen and (min-width:0px) and (max-width:959px) {
            .bbADCB {
                display: none;
            }
        }

        /* sc-component-id: sc-gOhbcK */

        .itIlnP {
            font-family: "Asap", sans-serif;
        }

        /* sc-component-id: sc-bEeSwp */

        .kplQqb {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .kplQqb {
                font-size: 26px;
                line-height: 26px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .kplQqb {
                font-size: 30px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .kplQqb {
                font-size: 32px;
                line-height: 32px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .kplQqb {
                font-size: 18px;
                line-height: 25px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .kplQqb {
                font-size: 26px;
                line-height: 40px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .kplQqb {
                font-size: 26px;
                line-height: 43px;
            }
        }

        /* sc-component-id: sc-GLkNx */

        @media screen and (min-width:0px) and (max-width:959px) {
            .hlIHpg {
                width: 100%;
                text-align: center;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hlIHpg {
                width: 60%;
                text-align: center;
            }
        }

        /* sc-component-id: sc-dJyloi */

        .koCIRO {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-top: 70px;
            margin-bottom: 50px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .koCIRO {
                margin-top: 30px;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        /* sc-component-id: sc-bECiaU */

        .erGuuS {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        /* sc-component-id: sc-fsPSfr */

        .lnAEAM {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            text-align: center;
        }

        /* sc-component-id: sc-VuRhl */

        .bCkhsz {
            color: #1c1c1c;
            font-family: 'Asap', sans-serif;
            character-space: 0.5;
            list-style: none;
            padding-left: 0 !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bCkhsz {
                font-size: 15px;
                line-height: 28px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .bCkhsz {
                font-size: 16px;
                line-height: 32px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .bCkhsz {
                font-size: 16px;
                line-height: 36px;
                margin: 16px 0;
            }
        }

        /* sc-component-id: sc-hfsWMF */

        .eVzCbV {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            margin-bottom: 0 !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .eVzCbV {
                font-size: 38px;
                line-height: 38px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .eVzCbV {
                font-size: 44px;
                line-height: 44px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .eVzCbV {
                font-size: 52px;
                line-height: 52px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .eVzCbV {
                font-size: 26px;
                line-height: 30px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .eVzCbV {
                font-size: 36px;
                line-height: 40px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .eVzCbV {
                font-size: 46px;
                line-height: 58px;
            }
        }

        /* sc-component-id: sc-czDwQe */

        .dnQfvk {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            display: block;
            margin: 0 !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .dnQfvk {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .dnQfvk {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dnQfvk {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-NOpvV */

        .btAiW {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            cursor: pointer;
            color: #81b227;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            font-size: 32px !important;
            color: #1c1c1c;
        }

        .btAiW:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .btAiW {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .btAiW {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .btAiW {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-Kgodr */

        .ljzJmV {
            border: solid 1px #c7c7c7;
            border-collapse: collapse;
            border-spacing: 0;
            font-family: 'Asap', sans-serif;
            min-width: 50%;
            margin: 12px;
        }

        .ljzJmV thead th {
            background-color: #c7c7c7;
            border: solid 1px #c7c7c7;
            padding: 10px;
            text-align: left;
        }

        .ljzJmV thead tr td h3 {
            text-align: center;
            margin-top: 16px;
            margin-bottom: 16px;
        }

        .ljzJmV thead tr td h3 span {
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }

        .ljzJmV tbody td {
            border: solid 1px#c7c7c7;
            padding: 10px;
        }

        .ljzJmV tbody td p {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        /* sc-component-id: sc-gDPesD */

        .bAGIpf {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bAGIpf {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        /* sc-component-id: sc-dqvjwr */

        @media screen and (min-width:0px) and (max-width:767px) {
            .crhqNg {
                width: 100%;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {}

        @media screen and (min-width:960px) and (max-width:99999px) {}

        /* sc-component-id: sc-euofZA */

        .eidGtW {
            display: block;
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            font-family: 'Roboto', sans-serif;
            width: 100%;
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            color: #1c1c1c;
            background-color: #ffffff;
            border-color: #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .eidGtW {
                height: 48px;
                padding: 14px;
                font-size: 14px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .eidGtW {
                height: 56px;
                padding: 16px;
                font-size: 15px;
            }
        }

        .eidGtW:focus {
            outline: 0;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .eidGtW:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: #f5f5f5;
            border: 1px solid #c7c7c7;
        }

        .eidGtW:required:valid {
            border: 2px solid #61d125;
            background: #ffffff url('data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Ctitle%3EValidation%3C%2Ftitle%3E%3Cg%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20transform%3D%22translate(-490.000000%2C%20-1228.000000)%22%3E%3Cg%20id%3D%22Icon%2FForm%2FTick%22%20transform%3D%22translate(488.000000%2C%201226.000000)%22%3E%3Cg%20id%3D%22Interface-Icon%2FForm%2FTick%22%20transform%3D%22translate(2.000000%2C%202.000000)%22%3E%3Ccircle%20id%3D%22Oval%22%20fill%3D%22%2361D125%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%2210%22%3E%3C%2Fcircle%3E%3Cpath%20d%3D%22M5.86576096%2C10.4812992%20C5.42962704%2C10.0618766%204.73322808%2C10.0725019%204.31031034%2C10.5050314%20C3.8873926%2C10.937561%203.89810643%2C11.6282046%204.33424035%2C12.0476272%20L7.08423994%2C14.692255%20C7.51091553%2C15.1025817%208.18908496%2C15.1025817%208.61576055%2C14.692255%20L14.6657597%2C8.87407378%20C15.1018936%2C8.45465121%2015.1126074%2C7.76400757%2014.6896897%2C7.33147805%20C14.2667719%2C6.89894852%2013.570373%2C6.88832323%2013.134239%2C7.3077458%20L7.85000025%2C12.3895084%20L5.86576096%2C10.4812992%20Z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-size: 22px 22px;
            background-position: right 11px center;
            background: none;
            border-color: #c7c7c7;
        }

        .eidGtW:required:valid:required:invalid {
            background: none;
            border: 2px solid #ff0000;
        }

        /* sc-component-id: sc-dRFBHB */

        .KrgzW {
            display: block;
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            font-family: 'Roboto', sans-serif;
            width: 100%;
            box-sizing: border-box;
            color: #1c1c1c;
            background-color: #ffffff;
            border-color: #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .KrgzW {
                height: 48px;
                padding: 14px;
                font-size: 14px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .KrgzW {
                height: 56px;
                padding: 16px;
                font-size: 15px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .KrgzW {
                max-width: 310px;
            }
        }

        .KrgzW:focus {
            outline: 0;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .KrgzW:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: #f5f5f5;
            border: 1px solid #c7c7c7;
        }

        .KrgzW:required:valid {
            border: 2px solid #61d125;
            background: #ffffff url('data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Ctitle%3EValidation%3C%2Ftitle%3E%3Cg%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20transform%3D%22translate(-490.000000%2C%20-1228.000000)%22%3E%3Cg%20id%3D%22Icon%2FForm%2FTick%22%20transform%3D%22translate(488.000000%2C%201226.000000)%22%3E%3Cg%20id%3D%22Interface-Icon%2FForm%2FTick%22%20transform%3D%22translate(2.000000%2C%202.000000)%22%3E%3Ccircle%20id%3D%22Oval%22%20fill%3D%22%2361D125%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%2210%22%3E%3C%2Fcircle%3E%3Cpath%20d%3D%22M5.86576096%2C10.4812992%20C5.42962704%2C10.0618766%204.73322808%2C10.0725019%204.31031034%2C10.5050314%20C3.8873926%2C10.937561%203.89810643%2C11.6282046%204.33424035%2C12.0476272%20L7.08423994%2C14.692255%20C7.51091553%2C15.1025817%208.18908496%2C15.1025817%208.61576055%2C14.692255%20L14.6657597%2C8.87407378%20C15.1018936%2C8.45465121%2015.1126074%2C7.76400757%2014.6896897%2C7.33147805%20C14.2667719%2C6.89894852%2013.570373%2C6.88832323%2013.134239%2C7.3077458%20L7.85000025%2C12.3895084%20L5.86576096%2C10.4812992%20Z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-size: 22px 22px;
            background-position: right 11px center;
            height: 120px !important;
        }

        .KrgzW:required:valid:required:invalid {
            background: none;
            border: 2px solid #ff0000;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .KrgzW:required:valid {
                max-width: 100%;
            }
        }

        /* sc-component-id: sc-bUIkmT */

        .fVNQPh {
            text-align: center;
        }

        /* sc-component-id: sc-dsaGNW */

        .bINWvH {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
            box-sizing: border-box;
            -webkit-text-decoration: none;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            font-family: 'Asap', sans-serif;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase;
            -webkit-letter-spacing: 0.7px;
            -moz-letter-spacing: 0.7px;
            -ms-letter-spacing: 0.7px;
            letter-spacing: 0.7px;
            color: #ffffff;
            background: #81b227;
            border: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bINWvH {
                height: 48px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .bINWvH {
                height: 56px;
            }
        }

        .bINWvH:hover {
            color: #ffffff;
            background: #659016;
        }

        .bINWvH:focus {
            outline: none;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .bINWvH:disabled {
            cursor: not-allowed;
            color: #ffffff;
            background: #c7c7c7;
            border: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .bINWvH {
                height: 48px;
                min-width: 69px;
                font-size: 16px;
                padding: 10px;
                line-height: 1.5;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .bINWvH {
                height: 56px;
                min-width: 90px;
                font-size: 18px;
                padding: 10px;
                line-height: 1.33;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .bINWvH {
                display: initial;
                width: 50%;
            }
        }

        /* sc-component-id: sc-hmAwuO */

        .dnQYsv {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            display: inline-block;
            margin: 10px;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .dnQYsv {
                font-size: 56px;
                line-height: 54px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .dnQYsv {
                font-size: 76px;
                line-height: 70px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dnQYsv {
                font-size: 96px;
                line-height: 88px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .dnQYsv {
                font-size: 36px;
                line-height: 39px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .dnQYsv {
                font-size: 56px;
                line-height: 55px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dnQYsv {
                font-size: 66px;
                line-height: 73px;
            }
        }

        /* sc-component-id: sc-fNFDGM */

        .eYJlYT {
            display: inline-block;
        }

        /* sc-component-id: sc-hEEUtg */

        .fbsJeK {
            overflow: hidden;
        }

        /* sc-component-id: sc-eKQksS */

        .gHdoDW {
            color: #1c1c1c;
            font-family: 'Asap', sans-serif;
            character-space: 0.5;
            font-weight: bold;
            padding-left: 10px !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .gHdoDW {
                font-size: 15px;
                line-height: 28px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .gHdoDW {
                font-size: 16px;
                line-height: 32px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .gHdoDW {
                font-size: 16px;
                line-height: 36px;
                margin: 16px 0;
            }
        }

        .gHdoDW ol,
        .gHdoDW p {
            font-weight: normal;
        }

        /* sc-component-id: sc-hJfILt */

        .LmbkI {
            color: #1c1c1c;
            font-family: 'Asap', sans-serif;
            character-space: 0.5;
            list-style: lower-alpha;
            margin-top: 0 !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .LmbkI {
                font-size: 15px;
                line-height: 28px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .LmbkI {
                font-size: 16px;
                line-height: 32px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .LmbkI {
                font-size: 16px;
                line-height: 36px;
                margin: 16px 0;
            }
        }

        /* sc-component-id: sc-cnJOrV */

        .kOcjxE {
            color: #1c1c1c;
            font-family: 'Asap', sans-serif;
            character-space: 0.5;
            list-style: lower-roman;
            margin-top: 0 !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .kOcjxE {
                font-size: 15px;
                line-height: 28px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .kOcjxE {
                font-size: 16px;
                line-height: 32px;
                margin: 16px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .kOcjxE {
                font-size: 16px;
                line-height: 36px;
                margin: 16px 0;
            }
        }

        /* sc-component-id: sc-HCMGD */

        .hchUts {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            margin: 10px 0 !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hchUts {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hchUts {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hchUts {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-coTZgP */

        .dMCkHl {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            margin: 0 !important;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .dMCkHl {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .dMCkHl {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dMCkHl {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-hTgGLG */

        .bMFryJ {
            margin-right: -15px;
            margin-left: -15px;
        }

        .bMFryJ:after {
            clear: both;
        }

        .bMFryJ:before {
            display: table;
            content: " ";
        }

        /* sc-component-id: sc-bKcCCv */

        .kUhKHx {
            width: 100%;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            text-align: center;
            box-sizing: border-box;
        }

        /* sc-component-id: sc-bQQHgq */

        .gtGwHA {
            display: inline-block;
            float: left;
            height: 145px;
            width: 235px;
            border-radius: 10px;
            margin: 5px 8px;
            padding: 5px 10px;
            box-shadow: 0 0 5px 2px #ddd;
        }

        .gtGwHA p {
            -webkit-text-decoration: none;
            text-decoration: none;
            line-height: 14px;
            text-align: center;
            font-size: 14px;
            color: #000;
            margin: 10px 0 !important;
        }

        .gtGwHA:hover {
            box-shadow: 0 1px 8px 3px rgba(0, 0, 0, 0.35);
        }

        /* sc-component-id: sc-eGMfeR */

        .hYtFVC {
            font-family: 'Asap', sans-serif;
            character-space: 0;
            cursor: pointer;
            color: #81b227;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            margin: 0 !important;
            display: inline-block;
        }

        .hYtFVC:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .hYtFVC {
                font-size: 15px;
                line-height: 28px;
                margin: 22px 0;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .hYtFVC {
                font-size: 16px;
                line-height: 32px;
                margin: 26px 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hYtFVC {
                font-size: 16px;
                line-height: 36px;
                margin: 30px 0;
            }
        }

        /* sc-component-id: sc-cFMgCN */

        .ejPMEA {
            display: block;
            margin: 10px auto;
            height: 55px;
            width: 178px;
            background-size: contain;
            background-position: 50%;
            background-repeat: no-repeat;
        }

        /* sc-component-id: sc-doZvUO */

        .eXcWgR {
            clear: both;
        }

        /* sc-component-id: sc-jbxdUx */

        .ggcomG {
            text-align: center;
        }

        /* sc-component-id: sc-frpTsy */

        @media screen and (min-width:0px) and (max-width:959px) {
            .cUJIzn {
                width: 100%;
            }
        }

        /* sc-component-id: sc-bMuqKn */

        .kAckPc {
            display: block;
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            font-family: 'Roboto', sans-serif;
            width: 100%;
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2014%208%22%3E%3Cpath%20d%3D%22M.99-.01a1%201%200%200%200-.7%201.72l6%206a1%201%200%200%200%201.42%200l6-6A1%201%200%201%200%2012.29.29L7%205.6%201.7.29A1%201%200%200%200%201%200z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-size: 14px 8px;
            padding-right: 42px !important;
            color: #1c1c1c;
            background-color: #ffffff;
            border-color: #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .kAckPc {
                height: 48px;
                padding: 14px;
                font-size: 14px;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .kAckPc {
                height: 56px;
                padding: 16px;
                font-size: 15px;
            }
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .kAckPc {
                background-position: right 14px center;
            }
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .kAckPc {
                background-position: right 16px center;
            }
        }

        .kAckPc:focus {
            outline: 0;
            box-shadow: 0 0 15px 5px #007CC2;
            border: 1px solid #007CC2;
        }

        .kAckPc:disabled {
            cursor: not-allowed;
            color: #c7c7c7;
            background: #f5f5f5;
            border: 1px solid #c7c7c7;
        }

        .kAckPc:required:valid {
            border: 2px solid #61d125;
            background: #ffffff url('data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Ctitle%3EValidation%3C%2Ftitle%3E%3Cg%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20transform%3D%22translate(-490.000000%2C%20-1228.000000)%22%3E%3Cg%20id%3D%22Icon%2FForm%2FTick%22%20transform%3D%22translate(488.000000%2C%201226.000000)%22%3E%3Cg%20id%3D%22Interface-Icon%2FForm%2FTick%22%20transform%3D%22translate(2.000000%2C%202.000000)%22%3E%3Ccircle%20id%3D%22Oval%22%20fill%3D%22%2361D125%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%2210%22%3E%3C%2Fcircle%3E%3Cpath%20d%3D%22M5.86576096%2C10.4812992%20C5.42962704%2C10.0618766%204.73322808%2C10.0725019%204.31031034%2C10.5050314%20C3.8873926%2C10.937561%203.89810643%2C11.6282046%204.33424035%2C12.0476272%20L7.08423994%2C14.692255%20C7.51091553%2C15.1025817%208.18908496%2C15.1025817%208.61576055%2C14.692255%20L14.6657597%2C8.87407378%20C15.1018936%2C8.45465121%2015.1126074%2C7.76400757%2014.6896897%2C7.33147805%20C14.2667719%2C6.89894852%2013.570373%2C6.88832323%2013.134239%2C7.3077458%20L7.85000025%2C12.3895084%20L5.86576096%2C10.4812992%20Z%22%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-size: 22px 22px;
            background-position: right 11px center;
        }

        .kAckPc:required:valid:required:invalid {
            background: none;
            border: 2px solid #ff0000;
        }

        /* sc-component-id: sc-kicAms */

        .eiefuT {
            margin-bottom: 80px;
        }

        /* sc-component-id: sc-dUZuEM */

        .eUdTfy {
            color: #007CC2;
        }

        /* sc-component-id: sc-cFlMtL */

        .lhJOaG {
            width: 100%;
            background-color: #1c1c1c;
        }

        /* sc-component-id: sc-hpAzQi */

        .ejTxcC {
            display: block;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .ejTxcC {
                margin: 0 16px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .ejTxcC {
                margin: 0 36px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .ejTxcC {
                margin: 0 64px;
            }
        }

        @media screen and (min-width:0px) and (max-width:1366px) {
            .ejTxcC {
                display: block;
                padding: 25px 0;
            }
        }

        @media screen and (min-width:1366px) and (max-width:99999px) {
            .ejTxcC {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }
        }

        /* sc-component-id: sc-iKIEpe */

        .lezUsB {
            font-family: 'Roboto', sans-serif;
            color: #ffffff;
            font-size: 16px;
            line-height: 2;
            text-align: left;
        }

        .lezUsB a {
            -webkit-text-decoration: none;
            text-decoration: none;
            color: #ffffff;
        }

        /* sc-component-id: sc-dAAzKL */

        .hBehwp {
            margin: 15px 0;
            padding: 0;
            list-style: none;
        }

        @media screen and (min-width:0px) and (max-width:1366px) {
            .hBehwp {
                -webkit-columns: 2;
                columns: 2;
            }
        }

        @media screen and (min-width:1366px) and (max-width:99999px) {
            .hBehwp {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
            .hBehwp li {
                list-style: none;
            }
            @media screen and (min-width:0px) and (max-width:767px) {
                .hBehwp li {
                    margin: 0 8px 0 0;
                }
            }
            @media screen and (min-width:768px) and (max-width:959px) {
                .hBehwp li {
                    margin: 0 12px 0 0;
                }
            }
            @media screen and (min-width:960px) and (max-width:99999px) {
                .hBehwp li {
                    margin: 0 16px 0 0;
                }
            }
        }

        /* sc-component-id: sc-fWoLFK */

        .kOrrYA {
            margin: 15px 0;
            padding: 0;
            list-style: none;
        }

        @media screen and (min-width:0px) and (max-width:1366px) {
            .kOrrYA {
                -webkit-columns: 2;
                columns: 2;
            }
        }

        @media screen and (min-width:1366px) and (max-width:99999px) {
            .kOrrYA {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
            .kOrrYA li {
                list-style: none;
            }
            @media screen and (min-width:0px) and (max-width:767px) {
                .kOrrYA li {
                    margin: 0 8px 0 0;
                }
            }
            @media screen and (min-width:768px) and (max-width:959px) {
                .kOrrYA li {
                    margin: 0 12px 0 0;
                }
            }
            @media screen and (min-width:960px) and (max-width:99999px) {
                .kOrrYA li {
                    margin: 0 16px 0 0;
                }
            }
            .kOrrYA a {
                font-size: 15px;
            }
        }

        /* sc-component-id: sc-iAjrqK */

        .AFFOV {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            color: #ffffff;
            margin: 15px 0;
        }

        /* sc-component-id: sc-gKGeJo */

        .TIehu {
            font-family: 'Roboto', sans-serif;
            font-size: 11px;
            color: #ffffff;
            margin: 5px 0;
        }

        /* sc-component-id: sc-bripbU */

        @media screen and (min-width:0px) and (max-width:812px) {
            .kjHhtt {
                display: none;
            }
        }

        @media screen and (min-width:0px) and (max-width:1366px) {
            .kjHhtt {
                display: none;
            }
        }

        /* sc-component-id: sc-lgsYow */

        .fvJrAM {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: space-evenly;
            -webkit-justify-content: space-evenly;
            -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
            overflow: hidden;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        @media screen and (min-width:0px) and (max-width:1366px) {
            .fvJrAM {
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
            @media screen and (min-width:1366px) and (max-width:99999px) {
                .fvJrAM {
                    max-height: 400px;
                    min-height: 100px;
                    height: 300px;
                    -webkit-align-items: flex-end;
                    -webkit-box-align: flex-end;
                    -ms-flex-align: flex-end;
                    align-items: flex-end;
                }
            }
        }

        /* sc-component-id: sc-dTOuAs */

        .hOtOlY>svg {
            width: 652px;
            height: 88px;
        }

        .hOtOlY svg {
            fill: #ffffff;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .hOtOlY svg {
                max-height: 25px;
                max-width: 40vw;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .hOtOlY svg {
                max-width: 200px;
                max-height: 27px;
            }
        }

        /* sc-component-id: sc-eNhIyc */

        @media screen and (min-width:0px) and (max-width:812px) {
            .dbnnlD {
                display: block;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .dbnnlD {
                display: none;
            }
        }

        /* sc-component-id: sc-bnQDJF */

        .dfeIuG {
            text-align: center;
        }

        /* sc-component-id: sc-gnDgBH */

        .bsMYTS {
            visibility: hidden !important;
            display: none !important;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media screen and (min-width:768px) and (max-width:99999px) {
            .bsMYTS {
                width: 46px;
            }
        }

        /* sc-component-id: sc-jggjFL */

        .fUMEqm {
            position: relative;
        }

        /* sc-component-id: sc-dLHtUl */

        .erfkBV {
            display: inline-block;
            padding: 0 6px 0 0;
        }

        .erfkBV svg {
            width: 24px;
            height: 23px;
            fill: #f57e22;
        }

        /* sc-component-id: sc-dmXgXv */

        .iXeXpQ {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #a31e00;
            color: #ffffff;
            border-radius: 999px;
            width: 13px;
            height: 13px;
            font-size: 10px;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
        }

        /* sc-component-id: sc-hGKTXy */

        .fhxatx {
            width: 100%;
            background: #ffffff;
            border-bottom: 1px solid #c7c7c7;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .fhxatx {
                position: absolute;
                top: 40px;
                height: 60px;
                min-height: 60px;
                border-bottom: 0;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .fhxatx {
                height: 65px;
                min-height: 65px;
            }
        }

        /* sc-component-id: sc-kFvBWJ */

        .knjlXG {
            display: block;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media screen and (min-width:0px) and (max-width:767px) {
            .knjlXG {
                margin: 0 16px;
            }
        }

        @media screen and (min-width:768px) and (max-width:959px) {
            .knjlXG {
                margin: 0 36px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .knjlXG {
                margin: 0 64px;
            }
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .knjlXG {
                min-height: 60px;
                height: 60px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .knjlXG {
                min-height: 65px;
                height: 65px;
            }
        }

        /* sc-component-id: sc-ikTlrC */

        .fyXNbm {
            width: 100%;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .fyXNbm {
                height: 101px;
                min-height: 101px;
            }
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .fyXNbm {
                display: none;
            }
        }

        /* sc-component-id: sc-cBqwIa */

        .gDlJEj {
            -webkit-box-flex: 10;
            -webkit-flex-grow: 10;
            -ms-flex-positive: 10;
            flex-grow: 10;
        }

        /* sc-component-id: sc-boQTqM */

        .eZYPvs {
            display: inline-block;
            height: 100%;
        }

        .eZYPvs i {
            display: inline-block;
            height: 100%;
        }

        .eZYPvs svg {
            height: 100%;
            width: auto;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .eZYPvs {
                display: none;
            }
        }

        /* sc-component-id: sc-bnOsYM */

        .iMwZtM {
            display: inline-block;
            height: 100%;
        }

        .iMwZtM i {
            display: inline-block;
            height: 100%;
        }

        .iMwZtM svg {
            height: 100%;
            width: auto;
        }

        @media screen and (min-width:960px) and (max-width:99999px) {
            .iMwZtM {
                display: none;
            }
        }

        /* sc-component-id: sc-bOFpUc */

        .kpySPG {
            height: 100%;
            margin-right: -14px;
        }

        .kpySPG>svg {
            width: 292.29px;
            height: 88.1px;
        }

        .kpySPG svg {
            max-height: 100%;
            width: auto;
        }

        @media screen and (min-width:0px) and (max-width:959px) {
            .kpySPG {
                display: none;
            }
        }

        /* sc-component-id: sc-AhSAr */

        .dtkQzs {
            position: fixed;
            top: 0px;
            width: 100%;
            z-index: 150;
        }

        /* sc-component-id: sc-kqqoiJ */

        .djSLzE {
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
        }

        .djSLzE select::-ms-expand {
            display: none;
        }

        /* sc-component-id: sc-global-748805884 */

        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        #app {
            height: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        /* sc-component-id: sc-global-2632667507 */

        .cbar_bubble {
            z-index: 200 !important;
        }

        /* sc-component-id: sc-keyframes-iVXCSc */

        @-webkit-keyframes iVXCSc {
            from {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes iVXCSc {
            from {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

.kgmAjN {
    font-family: Asap, sans-serif;
    text-align: center;
}

.jwOSba {
    font-weight: bold;
}

.kudGmu {
    color: rgb(28, 28, 28);
    font-weight: bold;
    text-decoration: none;
}

.kAQPpu {
    max-width: 700px;
    text-align: left;
    margin: 0px auto;
}

.buOJrx {
    border-width: 3px;
    border-style: solid;
    border-color: rgb(97, 209, 37);
    border-image: initial;
    border-radius: 3px;
    padding: 16px;
}

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.hYOYCP {
    font-size: 16px;
    line-height: 36px;
    margin: 30px 0px;
}
}
.hYOYCP {
    font-family: Asap, sans-serif;
    color: rgb(0, 124, 194);
    line-height: 1.5 !important;
    margin: 0px !important;
}

.jMFYKC {
    display: flex;
    margin-bottom: 6px;
}

.jecWAD {
    font-weight: bold;
    flex: 1 1 0%;
}

.kFiTya {
    flex: 2 1 0%;
}

.gLAAje {
    text-align: left;
}

.hNsVvW {
    font-weight: bold;
}

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.nNgIq {
    font-size: 52px;
    line-height: 52px;
}
}
.nNgIq {
    font-family: Asap, sans-serif;
}



.cFWGkn {
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(199, 199, 199);
    border-image: initial;
}


.kgpbeH:first-of-type {
    clip-path: none;
    margin-left: 0px;
    background: transparent;
    border-left: 0px;

}
.kgpbeH {
    position: relative;
    clip-path: polygon(100% 0px, 100% 50%, 100% 100%, 0% 100%, 25px 50%, 0% 0%);
    flex: 1 1 0%;
    border-left: 1px solid rgb(199, 199, 199);
    background: linear-gradient(to right top, rgb(199, 199, 199) 50%, transparent 50%) left top / 25px 50% no-repeat, linear-gradient(to right bottom, rgb(199, 199, 199) 50%, transparent 50%) left bottom / 25px 50%;
    background-repeat: no-repeat;
}


@media screen and (max-width: 99999px) and (min-width: 768px)
{
.dJYsqN {
    transform: translateX(15px);
    margin: 25px;
}
}

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.utJvR {
    font-size: 32px;
    line-height: 32px;
}
}
.utJvR {
    font-family: Asap, sans-serif;
}

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.btZTLD {
    font-size: 16px;
    line-height: 36px;
    margin: 30px 0px;
}
}
.btZTLD {
    font-family: Asap, sans-serif;
}

.bDotBt {
    width: 60px;
    height: 60px;
}

.bDotBt svg {
    width: 60px;
    height: 60px;
    fill: rgb(0, 124, 194);
}

.fHmgqS {
    width: 60px;
    height: 60px;
}

.fHmgqS svg {
    width: 60px;
    height: 60px;
    fill: rgb(0, 124, 194);
}

.CyDiJ {
    width: 60px;
    height: 60px;
}
.CyDiJ svg {
    width: 60px;
    height: 60px;
        fill: rgb(0, 124, 194);
}

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.utJvR {
    font-size: 32px;
    line-height: 32px;
}
}

.utJvR {
    font-family: Asap, sans-serif;
}


@media screen and (max-width: 99999px) and (min-width: 960px)
{
.btZTLD {
    font-size: 16px;
    line-height: 36px;
    margin: 30px 0px;
}
}
.btZTLD {
    font-family: Asap, sans-serif;
}

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.nNgIq {
    font-size: 52px;
    line-height: 52px;
}
}
.nNgIq {
    font-family: Asap, sans-serif;
}
.kBWRUD {
    display: none;
}

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.giRUqh {
    grid-template-columns: repeat(12, 1fr);
    grid-column-gap: 32px;
    grid-row-gap: 32px;
}
}
.giRUqh {
    display: grid;
}

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.bYfOqj {
    grid-column: 1 / span 7;
    grid-row: 1 / span 1;
}

.ZdEiS {
    min-height: 60px;
    border-bottom: 1px solid rgb(199, 199, 199);
}

.ZdEiS > div {
    -webkit-box-align: center;
    align-items: center;
}

.gWLzxB {
    display: flex;
}

.iXSBof {
    -webkit-box-align: center;
    align-items: center;
    box-sizing: border-box;
    width: 60px;
}

.daIitG {
    margin-left: 16px;
    min-height: 60px;
    line-height: 60px;
    white-space: nowrap;
    text-align: left;
    text-overflow: ellipsis;
    flex: 1 1 0%;
    overflow: hidden;
}

.gsDFJp {
    min-height: 60px;
    line-height: 60px;
}

.iXSBof img {
    max-height: 40px;
}

.bzbncV svg {
    width: 40px;
    height: 40px;
}

.ivJfBm svg {
    width: 40px;
    height: 40px;
}

.gBLggU svg {
    width: 40px;
    height: 40px;
}

.bufbRG {
    font-weight: bold;
}

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.btZTLD {
    font-size: 16px;
    line-height: 36px;
    margin: 30px 0px;
}
}

.blvSgA {
    display: block;
}

.btZTLD {
    font-family: Asap, sans-serif;
}


.gsDFJp {
    min-height: 60px;
    line-height: 60px;
}


.ewAXTu {
    cursor: pointer;
    color: rgb(245, 126, 34);
    text-decoration: underline;
}
    </style>


</head>

<body>



    <app id="app">
        <div class="sc-hZSUBg sc-itybZL huXSnK"></div>
        <div class="sc-hZSUBg sc-kZmsYB jvVwcU"></div>
            
        @include('front.default.header')    
        <div class="sc-hZSUBg sc-ikTlrC fyXNbm"></div>
        <div class="sc-kqqoiJ djSLzE">
            <div class="sc-hZSUBg jvmIQB">
                <div class="sc-cMhqgX lgIQGd">
                    <div class="sc-iuJeZd mpjmA">
    <div class="sc-esOvli giRUqh">
        <div class="sc-hORach ineNZO">
            <div class="sc-ccXozh kgmAjN">
                <h2 class="sc-htpNat nNgIq">Order Placed</h2>
                <div class="sc-hORach ineNZO">
                    <p class="sc-bJTOcE ZPKia">Thank you for choosing tyresales. Your order reference number is: <span class="sc-dPNhBE jwOSba">{{$newo->reference_id}}</span></p>
                    <p class="sc-bJTOcE ZPKia">Your email confirmation has been sent to <span class="sc-dPNhBE jwOSba">{{$customer->email}}</span></p>
                    <p class="sc-bJTOcE ZPKia">If you have any questions please contact us on <a href="tel:1300897372" class="sc-kkwfeq kudGmu">1300 897 372</a>.</p>
                </div>
                <div class="sc-fAJaQT kAQPpu">
                    <div class="sc-cNnxps buOJrx">
                        

                        <p class="sc-dnqmqq sc-dPPMrM hYOYCP">You have successfully paid via paypal</p>

                        <div class="sc-jWxkHr jMFYKC">
                            <div class="sc-imDfJI jecWAD">Reference:</div>
                            <div class="sc-hAnkBK kFiTya">{{$newo->reference_id}}</div>
                        </div>
                        
                    </div>
                </div>
                <h2 class="sc-htpNat nNgIq">What you need to do next?</h2>
                <div class="sc-cAJUJo cFWGkn">
                    <div class="sc-cmUJln kgpbeH">
                        <div class="sc-gYtlsd dJYsqN"><i class="sc-bYSBpT sc-eTyWNx bDotBt"><svg enable-background="new 0 0 26 26" id="Слой_1" version="1.1" viewBox="0 0 26 26" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M24.9937134,7.7363281C24.9942017,7.7253418,25,7.7161255,25,7.7050781 c0-0.0361328-0.015625-0.0671387-0.0205688-0.1019287c-0.0073242-0.0523071-0.0127563-0.1030884-0.0308228-0.1526489 C24.9317627,7.40448,24.906189,7.3656616,24.8811035,7.3243408c-0.0245972-0.0409546-0.0466919-0.0814209-0.0791626-0.1174316 c-0.0354614-0.0393066-0.0780029-0.0679321-0.1209717-0.0990601c-0.0283813-0.0206299-0.0484619-0.0488892-0.0803833-0.0658569 l-11.25-5.9550781c-0.0217285-0.0114136-0.0455322-0.0108032-0.067749-0.0198975 c-0.046875-0.0193481-0.0931396-0.0322876-0.1429443-0.0419312c-0.0474243-0.0090332-0.0927124-0.0152588-0.1401978-0.0150757 c-0.0473633-0.0001831-0.0925293,0.0059814-0.1398315,0.0150146c-0.0502319,0.0096436-0.0969238,0.0227661-0.144104,0.0423584 c-0.0217896,0.0089722-0.045105,0.0083618-0.0663452,0.0195313l-11.25,5.9550781 C1.3674927,7.05896,1.3474121,7.0872192,1.3190308,7.1078491C1.276062,7.1389771,1.2335205,7.1676025,1.1980591,7.2069092 C1.1655884,7.2429199,1.1434937,7.2833862,1.1188965,7.3243408C1.093811,7.3656616,1.0682373,7.40448,1.0513916,7.4505005 C1.0333252,7.500061,1.0278931,7.5508423,1.0205688,7.6031494C1.015625,7.6379395,1,7.6689453,1,7.7050781 c0,0.0110474,0.0057983,0.0202637,0.0062866,0.03125c0.0020142,0.0496216,0.0174561,0.0969849,0.029541,0.1461792 c0.0122681,0.0489502,0.0206909,0.0978394,0.0420532,0.1424561c0.0046997,0.0099487,0.0038452,0.020874,0.0090332,0.0307007 c0.0095215,0.0180054,0.0290527,0.0248413,0.0397949,0.041748c0.0531616,0.0839844,0.1196289,0.1535034,0.2007446,0.2105713 c0.0270386,0.0189209,0.0499878,0.038208,0.0791016,0.0533447c0.104187,0.0548706,0.2175293,0.09375,0.3434448,0.09375h22.5 c0.1259155,0,0.2392578-0.0388794,0.3434448-0.09375c0.0291138-0.0151367,0.052063-0.0344238,0.0791016-0.0533447 c0.0811157-0.0570679,0.147583-0.1265869,0.2007446-0.2105713c0.0107422-0.0169067,0.0302734-0.0237427,0.0397949-0.041748 c0.005188-0.0098267,0.0043335-0.020752,0.0090332-0.0307007c0.0213623-0.0446167,0.0297852-0.0935059,0.0420532-0.1424561 C24.9762573,7.833313,24.9916992,7.7859497,24.9937134,7.7363281z M13,2.5986938l8.2299194,4.3563843H4.7700806L13,2.5986938z" fill="#1D1D1B"></path><path d="M10.3046875,19.4599609c0,0.4140625,0.3359375,0.75,0.75,0.75h3.890625 c0.4140625,0,0.75-0.3359375,0.75-0.75c0-0.3205566-0.2033081-0.5894775-0.4863281-0.6967163V10.699646 c0.28302-0.1072388,0.4863281-0.3761597,0.4863281-0.6967163c0-0.4140625-0.3359375-0.75-0.75-0.75h-3.890625 c-0.4140625,0-0.75,0.3359375-0.75,0.75c0,0.3205566,0.2033081,0.5894775,0.4863281,0.6967163v8.0635986 C10.5079956,18.8704834,10.3046875,19.1394043,10.3046875,19.4599609z M12.2910156,18.7099609v-7.9570313h1.4179688v7.9570313 H12.2910156z" fill="#1D1D1B"></path><path d="M3.8203125,19.4599609c0,0.4140625,0.3359375,0.75,0.75,0.75h3.890625 c0.4140625,0,0.75-0.3359375,0.75-0.75c0-0.3205566-0.2033081-0.5894775-0.4863281-0.6967163V10.699646 c0.28302-0.1072388,0.4863281-0.3761597,0.4863281-0.6967163c0-0.4140625-0.3359375-0.75-0.75-0.75h-3.890625 c-0.4140625,0-0.75,0.3359375-0.75,0.75c0,0.3205566,0.2033081,0.5894775,0.4863281,0.6967163v8.0635986 C4.0236206,18.8704834,3.8203125,19.1394043,3.8203125,19.4599609z M5.8066406,18.7099609v-7.9570313h1.4179688v7.9570313 H5.8066406z" fill="#1D1D1B"></path><path d="M16.7890625,19.4599609c0,0.4140625,0.3359375,0.75,0.75,0.75h3.890625 c0.4140625,0,0.75-0.3359375,0.75-0.75c0-0.3205566-0.2033081-0.5894775-0.4863281-0.6967163V10.699646 c0.28302-0.1072388,0.4863281-0.3761597,0.4863281-0.6967163c0-0.4140625-0.3359375-0.75-0.75-0.75h-3.890625 c-0.4140625,0-0.75,0.3359375-0.75,0.75c0,0.3205566,0.2033081,0.5894775,0.4863281,0.6967163v8.0635986 C16.9923706,18.8704834,16.7890625,19.1394043,16.7890625,19.4599609z M18.7753906,18.7099609v-7.9570313h1.4179688v7.9570313 H18.7753906z" fill="#1D1D1B"></path><path d="M1.9833984,21.8466797c0,0.4140625,0.3359375,0.75,0.75,0.75h20.5332031 c0.4140625,0,0.75-0.3359375,0.75-0.75s-0.3359375-0.75-0.75-0.75H2.7333984 C2.3193359,21.0966797,1.9833984,21.4326172,1.9833984,21.8466797z" fill="#1D1D1B"></path><path d="M24.0771484,23.5H1.9228516c-0.4140625,0-0.75,0.3359375-0.75,0.75s0.3359375,0.75,0.75,0.75h22.1542969 c0.4140625,0,0.75-0.3359375,0.75-0.75S24.4912109,23.5,24.0771484,23.5z" fill="#1D1D1B"></path></g></svg></i>
                            <h3
                                class="sc-bxivhb utJvR">Make Payment</h3>
                                <p class="sc-dnqmqq btZTLD">Use the Bank details from confirmation email to make payment. We will also email you these details.</p>
                        </div>
                    </div>
                    <div class="sc-cmUJln kgpbeH">
                        <div class="sc-gYtlsd dJYsqN"><i class="sc-hzDkRC sc-kDgGX fHmgqS"><svg viewBox="0 0 42 44" xmlns="http://www.w3.org/2000/svg"><path d="M36.3066.2813c-1.3965 0-2.5185.3678-3.3671 1.1054-.8487.7377-1.2806 1.7402-1.295 3.0078h2.6094c0-.5944.1885-1.0647.5645-1.412.376-.3474.8724-.5216 1.4882-.5216.6446 0 1.1338.1787 1.4668.5332.333.3545.498.8679.498 1.541 0 .5085-.1431.9812-.4296 1.418-.1862.2865-.628.7686-1.3262 1.4453-.6982.6768-1.166 1.2976-1.4023 1.8633-.2363.5658-.3535 1.3249-.3535 2.2774h2.4394c.0143-1.0313.2559-1.8164.7285-2.3536L39.25 7.8867c1.0885-1.1315 1.6328-2.2819 1.6328-3.4492 0-1.3106-.4033-2.33-1.209-3.0605C38.8682.6465 37.7461.2812 36.3066.2812zM21 1.5449c-11.598 0-21 9.402-21 21s9.402 21 21 21 21-9.402 21-21c0-1.819-.2308-3.6076-.6836-5.336l-1.9355.506c.4095 1.5631.6191 3.1825.6191 4.83 0 10.4934-8.5066 19-19 19s-19-8.5066-19-19 8.5066-19 19-19c1.8017 0 3.5688.2519 5.2656.7403l.5528-1.922C24.942 1.8233 22.9893 1.545 21 1.545zm-4.1914 4.6387C11.246 8.765 7.771 11.72 6.4336 15.1113l1.8594.7344c1.1137-2.824 4.216-5.4617 9.3574-7.8477l-.8418-1.8144zM21 10.6367c-6.5772 0-11.9082 5.331-11.9082 11.9082S14.4228 34.4551 21 34.4551s11.9082-5.333 11.9082-11.9102c0-5.5629-3.8188-10.2206-8.9746-11.5293l-.0098-.0176c-.0062.0035-.0113.0083-.0175.0118-.932-.2342-1.9018-.373-2.9063-.373zm0 2c.4182 0 .8279.0337 1.2324.084a4.1742 4.1742 0 0 0-.455 2.3887c.2462 2.2964 2.309 3.9591 4.6054 3.7129 1.2037-.1291 2.2385-.7678 2.914-1.6836.765 1.1713 1.282 2.5145 1.4942 3.959-.3294-.0825-.6682-.1348-1.0156-.1348-2.3096 0-4.1817 1.872-4.1817 4.1816 0 1.8357 1.191 3.3787 2.836 3.9414-1.0165 1.1537-2.292 2.07-3.7422 2.6524.0244-.1832.039-.3691.039-.5567 0-2.3095-1.872-4.1816-4.1816-4.1816-2.3095 0-4.1816 1.872-4.1816 4.1816 0 .0407.0047.0806.0058.1211-1.1155-.5911-2.1024-1.39-2.914-2.3437.9227-.4214 1.6864-1.1725 2.1074-2.1543.9102-2.1226-.0727-4.58-2.1953-5.4902a4.1676 4.1676 0 0 0-2.1445-.3067c.1476-.9449.4255-1.8452.8203-2.6816.752.6875 1.7491 1.0976 2.8222 1.0976 2.3096 0 4.1817-1.872 4.1817-4.1816 0-.8156-.2422-1.5882-.6621-2.2461.8343-.228 1.7085-.3594 2.6152-.3594zm3.3184.582c1.3753.4895 2.6117 1.266 3.6308 2.2696-.2964.7221-.9649 1.2562-1.7812 1.3437-1.1981.1285-2.272-.7374-2.4004-1.9355-.0674-.6284.1499-1.228.5508-1.6777zm11.7304.2422c-.4511 0-.8092.1312-1.0742.3926-.265.2614-.3984.6029-.3984 1.0254 0 .3939.1286.7233.3828.9883.2542.265.6172.3984 1.0898.3984.4727 0 .838-.1334 1.0957-.3984.2578-.265.3867-.5944.3867-.9883 0-.4082-.1315-.7451-.3964-1.0137-.265-.2685-.6276-.4043-1.086-.4043zm-19.5937.2852c.3743.3974.5918.928.5918 1.496 0 1.205-.9767 2.1817-2.1817 2.1817-.7021 0-1.3347-.3417-1.7382-.8789.8867-1.1616 2.0203-2.1218 3.328-2.7988zm4.0898 4.1621c-2.3095 0-4.1816 1.874-4.1816 4.1836s1.872 4.1816 4.1816 4.1816c2.3096 0 4.1817-1.872 4.1817-4.1816 0-2.3096-1.8721-4.1836-4.1817-4.1836zm0 2c1.205 0 2.1817.9786 2.1817 2.1836s-.9767 2.1816-2.1817 2.1816-2.1816-.9766-2.1816-2.1816.9766-2.1836 2.1816-2.1836zm9.2305 3.0547c.3942 0 .7653.1187 1.0957.3125-.1065 1.4563-.5193 2.8272-1.1875 4.041-1.1614-.0492-2.0898-.9984-2.0898-2.1719 0-1.205.9766-2.1816 2.1816-2.1816zm-18.2793.0234a2.1815 2.1815 0 0 1 1.084.166c1.1074.475 1.6194 1.7578 1.1445 2.8653-.27.6295-.8092 1.0747-1.4414 1.2441-.6806-1.2555-1.0842-2.6789-1.164-4.1875.1245-.036.2481-.0746.3769-.0879zM20.5449 29c1.205 0 2.1817.9767 2.1817 2.1816 0 .4206-.1202.82-.3399 1.166-.4543.0638-.9148.1075-1.3867.1075-.8337 0-1.6385-.1147-2.4121-.3086a2.1693 2.1693 0 0 1-.2246-.9649c0-1.205.9766-2.1816 2.1816-2.1816zm13.5098.2559c-2.7954 4.1117-5.7382 6.6292-8.8086 7.5957l.5996 1.9082c3.5534-1.1185 6.8333-3.9252 9.8613-8.379l-1.6523-1.125z"></path></svg></i>
                            <h3
                                class="sc-bxivhb utJvR">Confirm tyre size</h3>
                                <p class="sc-dnqmqq btZTLD">Check your email/sms to confirm that your order is correct. You have 4hrs to correct an incorrect order. </p>
                        </div>
                    </div>
                    <div class="sc-cmUJln kgpbeH">
                        <div class="sc-gYtlsd dJYsqN"><i class="sc-kjoXOD sc-cLxPOX CyDiJ"><svg viewBox="0 0 24 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="2%" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><g transform="translate(-496.000000, -973.000000)" stroke="#f57e22"><g id="Icon/Truck/Grey" transform="translate(496.000000, 970.000000)"><g id="truck" transform="translate(1.000000, 4.000000)"><rect id="Rectangle-path" stroke-width="1" x="0" y="0" width="15" height="13"></rect><polygon stroke-width="1" points="15 5 19 5 22 8 22 13 15 13"></polygon><circle id="Oval" stroke-width="1" cx="4.5" cy="15.5" r="2.5"></circle><circle id="Oval" stroke-width="1" cx="17.5" cy="15.5" r="2.5"></circle></g></g></g></g></svg></i>
                            <h3
                                class="sc-bxivhb utJvR">Delivery</h3>
                                <p class="sc-dnqmqq btZTLD">We will ship your tyres shortly. Once they have shipped, we will send you details on how to track your tyres, via email. We estimate they will arrive on Tuesday, 12 May 2020.</p>
                        </div>
                    </div>
                </div>
                <div class="sc-bLJvFH cAhcwe">
                    <div>
                    </div>
                </div>
                <div class="sc-hgzKov dshEaJ">
                    


                    <table cellspacing="20" cellpadding="5">
                        <thead><h1 style="font-size: 52px;">Summary of Your Order</h1><br>

                            <h5>Order Number: {{$newo->reference_id}}</h5>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img style="width: 25px;" src="{{$tyre->image}}"></td>
                                <td style="width: 550px;text-align: left;">{{$newo->quantity}} × {{$brand->name}} {{$pattern->name}} {{$tyre->name}}</td>
                                <td>${{$newo->price}}</td>
                                <td style="width: 500px;" rowspan="6">
                                    
                                     @if(isset($delivery))

                    <strong>{{$delivery->first_name}} {{$delivery->last_name}}</strong><br>{{$delivery->address_1}} {{$delivery->address_2}}<br>{{$delivery->supurb}}<br>{{$delivery->state}} {{$delivery->postcode}}
                   

                    @elseif(isset($selected))

                                        <strong>{{$selected->fitment_locations_areas_center->name}} {{$selected->fitment_locations_areas_center->address}}</strong><br>
                                    {{$selected->fitment_locations_areas_center->fitment_locations_areas->name}} 
                                    {{$selected->fitment_locations_areas_center->fitment_locations->name}} 
                                    {{$selected->fitment_locations_areas_center->fitment_locations_region->name}}
                                    
                    @endif
                                   
                                    Estimated Delivery Time<br>
                                    {{$newo->estimated_delivery_days}} day(s)<br>

                                    Payment Method<br>
                                    Paypal<br>



                                </td>
                            </tr>
                            <tr><td colspan="3"><hr></td></tr>
                             @foreach($extra as $e) 
                             <tr>
                                <td><img style="width: 25px;" src="{{$e->image}}"></td>
                                <td style="width: 550px;text-align: left;">{{$e->name}}</td>
                                <td>{{$e->description}}</td>
                            </tr>
                             <tr><td colspan="3"><hr></td></tr>
                            @endforeach

                             @if(isset($delivery))
                             <tr>
                                <td><i class="fa fa-edit"></td>
                                <td style="width: 550px;text-align: left;">Ship Direct to Me</td>
                                <td>-$@if(!empty($ship_discount))
                                                ${{$ship_discount->direct_shipment_discount}}
                                                @php $sh_val = $ship_discount->direct_shipment_discount; @endphp
                                            @else
                                                    ${{'40'}}
                                            @php $sh_val = 40; @endphp
                                            @endif</td>
                            </tr>
                             <tr><td colspan="3"><hr></td></tr>
                             @php $dis = $sh_val; @endphp
                                @else
                                @php $dis = 0; @endphp                        
                                @endif
                            <tr>
                                <td></td>
                                <td style="width: 550px;text-align: left;">GST Total</td>
                                <td>{{$tyre->gst}}</td>
                            </tr>

                            <tr style="color: rgb(245, 126, 34)">
                                <td></td>
                                <td style="width: 550px;text-align: left;"><strong>Order Total</strong></td>
                                <td><strong>${{$newo->price-$dis}}</strong></td>
                            </tr>

                        </tbody>
                    </table>



                </div>
    
</div>
</div>
</div>
</div>
                </div>
            </div>
        </div>
        <div class="sc-hZSUBg sc-cFlMtL lhJOaG">
            <div class="sc-cMhqgX lgIQGd">
                <div class="sc-iuJeZd sc-hpAzQi ejTxcC">
                    <div class="sc-iKIEpe lezUsB">
                        <nav><a {{route('home')}}><span class="sc-dUZuEM eUdTfy">Tyresales</span></a> <br class="sc-eNhIyc dbnnlD" />Australia&#x27;s favourite online tyre store with <span class="sc-dUZuEM eUdTfy">~</span> tyres for sale!
                            <ul class="sc-dAAzKL hBehwp">
                                <li><a href="/about-us">About Us</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "About Us",
                                            "url": "/about-us"
                                        }
                                    </script>
                                </li>
                                <li><a href="https://tyresales.zendesk.com/hc/en-us/requests/new">Contact Us</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Contact Us",
                                            "url": "https://tyresales.zendesk.com/hc/en-us/requests/new"
                                        }
                                    </script>
                                </li>
                                <li><a href="https://www.tyresales.com.au/corporate-advertising">Corporate Advertising</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Corporate Advertising",
                                            "url": "https://www.tyresales.com.au/corporate-advertising"
                                        }
                                    </script>
                                </li>
                                <li><a href="/site-map">Site Map</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Site Map",
                                            "url": "/site-map"
                                        }
                                    </script>
                                </li>
                                <li><a href="/terms-conditions">Terms and Conditions</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Terms and Conditions",
                                            "url": "/terms-conditions"
                                        }
                                    </script>
                                </li>
                                <li><a href="https://www.tyresales.com.au/dealer-signup">Dealer Signup</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Dealer Signup",
                                            "url": "https://www.tyresales.com.au/dealer-signup"
                                        }
                                    </script>
                                </li>
                                <li><a href="/privacy">Privacy</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Privacy",
                                            "url": "/privacy"
                                        }
                                    </script>
                                </li>
                                <li><a href="/fitment-locations-australia">Fitment Locations</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Fitment Locations",
                                            "url": "/fitment-locations-australia"
                                        }
                                    </script>
                                </li>
                                <li><a href="/offers/current-promotions">Promotions</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Promotions",
                                            "url": "https://www.tyresales.com.au/customer-service/promotions"
                                        }
                                    </script>
                                </li>
                            </ul>
                            <ul class="sc-dAAzKL sc-fWoLFK kOrrYA">
                                <li><a href="/tyres/brand/pattern">Browse by Brand and Pattern</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Browse by Brand and Size",
                                            "url": "/tyres/brand/pattern"
                                        }
                                    </script>
                                </li>
                                <li><a href="/tyres/brand/size">Browse by Brand and Size</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Browse by Brand and Size",
                                            "url": "/tyres/brand/size"
                                        }
                                    </script>
                                </li>
                                <li><a href="https://www.tyresales.com.au/tyres/runflat">Browse by Runflat Tyres</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Browse by Runflat Tyres",
                                            "url": "https://www.tyresales.com.au/tyres/runflat"
                                        }
                                    </script>
                                </li>
                                <li><a href="https://www.tyresales.com.au/tyres/suv">Browse by SUV Tyres</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Browse by SUV Tyres",
                                            "url": "https://www.tyresales.com.au/tyres/suv"
                                        }
                                    </script>
                                </li>
                                <li><a href="https://www.tyresales.com.au/tyres/fuelefficient">Browse by Fuel Efficient Tyres</a>
                                    <script type="application/ld+json">
                                        {
                                            "@context": "https://schema.org",
                                            "@type": "SiteNavigationElement",
                                            "identifier": "Footer",
                                            "name": "Browse by Fuel Efficient Tyres",
                                            "url": "https://www.tyresales.com.au/tyres/fuelefficient"
                                        }
                                    </script>
                                </li>
                            </ul>
                        </nav>
                        <div class="sc-iAjrqK AFFOV">© tyresales Pty Ltd All rights reserved</div>
                        <div class="sc-gKGeJo TIehu">*MLP = Manufacturer’s List Price. Last updated May 2019 <br/>** See our
                            <!-- --><a href="/customer-service/price-match-guarantee">Price Match Guarantee</a><br/>+ Delivery is free to most metro areas, for regional areas a delivery surcharge may apply. Excludes Truck &amp; OTR Tyres.<br/>^ Free installation
                            excludes Truck &amp; OTR Tyres<br/>Some images are for illustation purposes only.
                            <div class="sc-bripbU kjHhtt"><br/><br/><br/></div>
                        </div>
                    </div>
                    <div class="sc-lgsYow fvJrAM"><i class="sc-feJyhm sc-dTOuAs hOtOlY"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 651.28996 87.343804"><path d="m 346.58,27.927658 c 8.55,0.67 14.98,8.18 14.31,16.73 -0.67,8.55 -8.18,14.98 -16.73,14.31 -8.55,-0.67 -14.98,-8.18 -14.31,-16.73 0.67,-8.55 8.19,-14.98 16.73,-14.31 z m 30.82,-11.36 c 6.08,7.04 9.02,19.52 6.95,33.48 -3.13,21.14 -16.58,37.89 -29.93,37.28 -4.37,-0.2 -8.2,-2.23 -11.27,-5.61 11.36,-2.14 23.58,-12.42 30.91,-27.32 6.77,-13.79 7.66,-28.11 3.34,-37.83 z m -64.86,53.65 c -5.91,-7.18 -8.53,-19.73 -6.12,-33.64 3.65,-21.06 17.5,-37.47000043 30.84,-36.54000043 4.36,0.31 8.14,2.43000003 11.12,5.89000003 -11.41,1.86 -23.88,11.8300004 -31.56,26.5500004 -7.11,13.62 -8.35,27.92 -4.28,37.74 z m 45.23,-4.06 c -11.11,10.41 -25.09,14.43 -33.95,8.35 -8.92,-6.12 -9.99,-20.67 -4.06,-34.83 -0.09,0.58 -0.15,1.16 -0.2,1.75 -1.11,14.22 9.58,26.72 23.8,27.82 5.19,0.41 10.15,-0.76 14.41,-3.09 z m 9.23,-53.77 c 8.87,6.08 9.87,20.48 4.03,34.55 0.07,-0.49 0.12,-0.98 0.16,-1.48 1.11,-14.22 -9.58,-26.71 -23.8,-27.82 -5.27,-0.41 -10.3,0.8 -14.6,3.21 11.16,-10.5 25.32,-14.5700004 34.21,-8.46 z m 72.04,41.69 c -3.45,9.51 -11.35,15.26 -21.32,15.26 -10.89,0 -22.63,-8.75 -22.63,-22.86 0,-13.04 10.82,-22.55 22.55,-22.55 5.37,0 17.03,2.45 21.4,15.57 h -11.51 c -1.23,-2.15 -3.61,-6.21 -9.9,-6.21 -6.21,0 -12.35,4.6 -12.35,13.35 0,7.29 5.14,13.35 12.81,13.35 3.37,0 6.75,-1.61 9.44,-5.9 z m 1.79,-7.36 c 0,-12.89 10.51,-22.78 22.71,-22.78 12.04,0 22.55,9.59 22.55,22.63 0,13.96 -10.74,22.78 -22.55,22.78 -12.66,-0.01 -22.71,-10.44 -22.71,-22.63 z m 35.06,0.07 c 0,-7.75 -5.98,-13.5 -12.35,-13.5 -5.29,0 -12.5,4.53 -12.5,13.43 0,8.05 6.06,13.27 12.5,13.27 7.44,0 12.35,-6.45 12.35,-13.2 z m 13.49,-21.4 h 9.36 v 3.6 h 0.16 c 0.84,-1.38 3.76,-5.06 11.12,-5.06 2.3,0 8.28,0.54 12.27,6.67 4.45,-6.37 10.74,-6.67 13.73,-6.67 8.36,0 12.5,4.45 14.04,6.6 1.69,2.22 3.22,6.29 3.22,12.58 v 24.85 h -10.2 v -23.62 c 0,-2.45 0,-11.05 -8.05,-11.05 -2.84,0 -5.6,1.53 -7.06,3.99 -1.46,2.3 -1.54,6.06 -1.54,8.67 v 22.01 h -10.2 v -23.62 c 0,-5.83 -2.23,-11.05 -8.51,-11.05 -8.13,0 -8.13,8.9 -8.13,13.43 v 21.25 h -10.2 z m 94.71,43.15 h -7.95 v -56.57 h 7.95 z m 16.44,0 h -7.95 v -35.09 h -5.73 v -7.26 h 5.73 v -14.22 h 7.95 v 14.22 h 6.96 v 7.26 h -6.96 z m 43.42,0 v -6.04 h -0.15 c -3.36,4.66 -8.79,7.11 -14.98,7.11 -14.06,0 -22.01,-10.93 -22.01,-22.09 0,-10.32 7.03,-22.47 22.01,-22.47 5.89,0 11.31,2.45 14.37,6.34 h 0.15 v -19.42 h 7.95 v 56.56 h -7.34 z m -14.68,-36.24 c -9.78,0 -14.52,8.48 -14.52,15.13 0,7.64 6.04,14.91 14.45,14.91 8.33,0 14.75,-6.8 14.75,-14.91 0,-9.01 -6.5,-15.13 -14.68,-15.13 z m -594.78,7.19 c -1.33,-2.73 -4.45,-8.12 -12.17,-8.12 -10.46,0 -14.2,8.74 -14.2,15.3 0,7.49 4.76,15.38 14.05,15.38 6.09,0 10.23,-3.51 12.25,-7.96 h 9.05 c -3.28,9.6 -11.71,15.38 -21.31,15.38 -14.2,0 -22.16,-11.63 -22.16,-22.79 0,-11.7 8.58,-22.71 22.24,-22.71 12.25,0 19.59,9.13 21.23,15.53 z m 49.44,28.87 v -6.71 h -0.16 c -3.12,5.31 -8.82,7.8 -14.67,7.8 -14.59,0 -22.94,-11.16 -22.94,-22.55 0,-10.53 7.41,-22.94 22.94,-22.94 6.01,0 11.55,2.5 14.67,7.26 h 0.16 v -6.09 h 8.12 v 43.23 z m -14.83,-36.99 c -9.99,0 -14.83,8.66 -14.83,15.45 0,7.81 6.17,15.22 14.75,15.22 8.51,0 15.06,-6.95 15.06,-15.22 0.01,-9.2 -6.62,-15.45 -14.98,-15.45 z m 122.4,36.99 v -6.71 h -0.16 c -3.12,5.31 -8.82,7.8 -14.67,7.8 -14.59,0 -22.95,-11.16 -22.95,-22.55 0,-10.53 7.41,-22.94 22.95,-22.94 6.01,0 11.55,2.5 14.67,7.26 h 0.16 v -6.09 h 8.12 v 43.23 z m -14.83,-36.99 c -9.99,0 -14.83,8.66 -14.83,15.45 0,7.81 6.17,15.22 14.75,15.22 8.51,0 15.06,-6.95 15.06,-15.22 0,-9.2 -6.63,-15.45 -14.98,-15.45 z m 36.27,36.99 h -8.12 v -57.75 h 8.12 z m 11.83,-18.1 c 2.03,8.35 8.74,11.79 14.2,11.79 6.01,0 10.38,-3.51 12.33,-7.26 h 8.12 c -4.14,11.16 -14.05,14.67 -20.76,14.67 -12.25,0 -22.01,-10.54 -22.01,-22.79 0,-12.95 9.99,-22.71 22.16,-22.71 11.71,0 21.93,9.52 22.01,22.16 0,1.4 -0.16,3.59 -0.23,4.14 z m 27.94,-6.25 c -0.39,-6.32 -6.16,-12.64 -13.97,-12.64 -7.8,0 -13.58,6.32 -13.97,12.64 z m 19.2,-7.81 c 0.08,-1.77 1.54,-5.28 6.79,-5.28 5.26,0 6.99,4.47 7.21,5.92 l 7.88,0.01 c 0,-3.36 -3.48,-12.89 -15.03,-12.89 -11.56,0 -14.23,8.15 -14.4,11.95 -0.63,14.05 22.65,11.56 22.24,20.7 -0.08,1.7 -1.7,5.77 -8.42,5.77 -6.57,0 -8.65,-5.42 -8.8,-7.59 h -7.77 c 0.42,4.24 3.47,14.68 16.69,14.68 13.15,0 15.71,-9.33 15.87,-12.8 0.64,-14.68 -22.56,-13.78 -22.26,-20.47 z m -142.86,0 c 0.08,-1.77 1.54,-5.28 6.79,-5.28 5.26,0 6.99,4.47 7.21,5.92 l 7.89,0.01 c 0,-3.36 -3.47,-12.89 -15.03,-12.89 -11.56,0 -14.23,8.15 -14.4,11.95 -0.63,14.05 22.65,11.56 22.24,20.7 -0.08,1.7 -1.7,5.77 -8.42,5.77 -6.57,0 -8.65,-5.42 -8.8,-7.59 h -7.77 c 0.42,4.24 3.47,14.68 16.69,14.68 13.15,0 15.71,-9.33 15.87,-12.8 0.64,-14.68 -22.57,-13.78 -22.27,-20.47 z m -12.17,-12.24 c -8.04,0 -10.85,4.06 -12.41,5.85 h -0.09 v -4.68 h -7.55 v 43.23 h 8.12 v -23.59 c 0,-3.2 0,-12.98 10.69,-12.98 0.89,0 1.79,0.18 2.67,0.52 l 3.6,-7.35 c -1.67,-0.64 -3.39,-1 -5.03,-1 z"></path></svg></i>
                        <div
                            class="sc-bnQDJF dfeIuG"></div>
                </div>
            </div>
        </div>
        </div>
    </app>

    <script>
        window.env = {
            "PUBLIC_API_HOST": "https://www.tyresales.com.au",
            "MEMBERCENTRE_URL": "https://access.carsalesnetwork.com.au/tyresales"
        };
    </script>
    <script>
        window.__INITIAL_STATE__ = {
            "cart": {
                "kind": "NOT_REQUESTED"
            },
            "cartModalDisplay": "OPEN",
            "nav": "CLOSED",
            "theme": "tyresales-2020",
            "sizeTree": {
                "kind": "NOT_REQUESTED"
            },
            "predictiveMakeModels": {
                "kind": "NOT_REQUESTED"
            },
            "query": {
                "type": "rego"
            },
            "regoSearchResults": {
                "instanceof": "Map",
                "value": []
            },
            "slides": {
                "kind": "NOT_REQUESTED"
            },
            "promotionMessages": {
                "kind": "RESPONSE",
                "value": [{
                    "ID": 1,
                    "Position": "Left",
                    "Message": "WE ARE STILL OPEN | SHOP SAFELY ONLINE AND SUPPORT LOCAL BUSINESS.",
                    "MessageURL": "/whybuyonline",
                    "CreatedDateTime": "2020-05-01T04:46:07"
                }, {
                    "ID": 9,
                    "Position": "Middle",
                    "Message": "SALE | MAY SPECIAL OFFERS",
                    "MessageURL": "/search?search=size&sortby=1&c=133",
                    "CreatedDateTime": "2020-05-01T04:46:07"
                }]
            },
            "siteConfiguration": {
                "kind": "NOT_REQUESTED"
            },
            "tyreCount": {
                "kind": "RESPONSE",
                "value": {
                    "TyreCount": "739,977"
                }
            },
            "competitorData": {
                "kind": "NOT_REQUESTED"
            },
            "cities": {
                "instanceof": "Map",
                "value": []
            },
            "states": {
                "kind": "NOT_REQUESTED"
            },
            "suburbs": {
                "instanceof": "Map",
                "value": []
            },
            "modal": "NONE",
            "productDetails": {
                "kind": "NOT_REQUESTED"
            },
            "productReviews": {
                "instanceof": "Map",
                "value": []
            },
            "sameDayFitmentForm": {
                "postcode": "",
                "phone": "",
                "name": "",
                "formState": "INITIAL"
            },
            "countdownClock": {
                "kind": "NOT_REQUESTED"
            },
            "selectTyreFittingCentreChildComponent": "None",
            "ourFitmentcenters": {
                "kind": "NOT_REQUESTED"
            },
            "ourFitmentCentresComponent": "None",
            "fitmentcenters": {
                "kind": "NOT_REQUESTED"
            },
            "fitmentAppointment": "COLLAPSED",
            "searchResults": {
                "kind": "NOT_REQUESTED"
            },
            "vehicleMakes": {
                "kind": "NOT_REQUESTED"
            },
            "activeProductTab": "REVIEWS",
            "payment": {
                "checkoutForm": {
                    "firstName": "Arbaz",
                    "lastName": "",
                    "phoneNumber": "",
                    "company": "",
                    "email": "mohammad.arbaz001@gmail.com",
                    "reconfirmEmail": "mohammad.arbaz001@gmail.com",
                    "billingFirstName": "",
                    "billingLastName": "",
                    "billingAddress1": "",
                    "billingSuburb": "",
                    "billingState": "",
                    "billingPostcode": "",
                    "vehicleMake": "",
                    "vehicleModel": "",
                    "vehicleRego": "",
                    "fitmentAddressLine1": "",
                    "fitmentAddressLine2": "",
                    "fitmentSuburb": "",
                    "fitmentState": "",
                    "fitmentPostcode": ""
                },
                "paymentObject": {
                    "CREDIT_CARD": {},
                    "ZIP": {
                        "dobDay": "",
                        "dobMonth": "",
                        "dobYear": ""
                    },
                    "LEASE": {
                        "financeProvider": "",
                        "vehicleRego": ""
                    },
                    "selectedPaymentMethod": "CREDIT_CARD"
                },
                "promoCode": ""
            },
            "paymentButtonState": "ENABLE",
            "billingIsSameAsDelivery": "SAME",
            "financeProviders": {
                "kind": "NOT_REQUESTED"
            },
            "braintreeClientToken": {
                "kind": "NOT_REQUESTED"
            },
            "braintreeClient": {
                "kind": "NOT_REQUESTED"
            },
            "braintreeHostedFields": {
                "kind": "NOT_REQUESTED"
            },
            "braintreeDataCollector": {
                "kind": "NOT_REQUESTED"
            },
            "braintreePaypalCheckout": {
                "kind": "NOT_REQUESTED"
            },
            "braintreePaymentRequest": {
                "kind": "NOT_REQUESTED"
            },
            "directShipment": {
                "FirstName": "",
                "LastName": "",
                "Address1": "",
                "Address2": "",
                "Suburb": "",
                "State": "",
                "Postcode": ""
            },
            "reservation": {
                "Customer": {
                    "DeliveryFirstName": "Arbaz",
                    "BillingFirstName": "Arbaz",
                    "FirstName": "Arbaz",
                    "Email": "mohammad.arbaz001@gmail.com"
                }
            },
            "promoCodeResult": {
                "kind": "NOT_REQUESTED"
            },
            "tyreDeliveryMethod": "CHOOSE_POSTCODE",
            "checkoutStepValue": "STEP_1",
            "orderSummary": {
                "kind": "NOT_REQUESTED"
            },
            "loginResponse": {
                "kind": "RESPONSE",
                "value": {
                    "Memberprofile": {
                        "Email": "mohammad.arbaz001@gmail.com",
                        "FirstName": "Arbaz"
                    },
                    "CookieResponse": {
                        "token": "ca7b8990-e82e-4b4b-9bf5-67cc0da5efa4",
                        "claimPrincipal": {
                            "FirstName": "Arbaz",
                            "MemberId": "44089d49-e46c-4d39-9312-5e506aedd6f2",
                            "Email": "mohammad.arbaz001@gmail.com",
                            "MemberTrackingId": "a30643b1-14d5-4f00-8542-d35e3664725a"
                        },
                        "valid": true
                    }
                }
            },
            "sitemap": {
                "kind": "NOT_REQUESTED"
            },
            "seoTyresByBrand": {
                "kind": "NOT_REQUESTED"
            },
            "seoTyresByBrandAndSize": {
                "kind": "NOT_REQUESTED"
            },
            "seoTyresByBrandAndPattern": {
                "kind": "NOT_REQUESTED"
            },
            "mobileFitmentCutoffTime": {
                "kind": "NOT_REQUESTED"
            },
            "promotionPageContentModel": {
                "kind": "NOT_REQUESTED"
            },
            "postCodesEligibleForMobile": {
                "kind": "NOT_REQUESTED"
            },
            "partner": {
                "kind": "NOT_REQUESTED"
            },
            "googleReview": {
                "kind": "NOT_REQUESTED"
            }
        };
    </script>

    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPUYOZOarIsBg2wtPZtHCM4ssrbIrfebs&libraries=places"></script>

    <script defer src="{{asset('public/front/dist/vendor.e863ad10696d84456c20.js')}}"></script>
    <script defer src="{{asset('public/front/dist/main-client.06e8acbd637b48b30091.js')}}"></script>






</body>

</html>