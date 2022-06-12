<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Vacunación Universidad Mariana</title>
        <link rel="icon" href="{!! asset('img/qwe.png') !!}"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <!--  background-image: url('img/abcde.jpg');-->
           <!--       background-repeat: repeat;-->
           <!--       background-size: 1100px 1100px; -->
        <style>
            body {
             
              background-image: url('img/abf.png');
                  background-repeat: repeat;
                background-size: 1510px 1600px; 

            }
            .navbar {
              height: 40px;
            }

            .navbar-brand {
              padding: 0px;
              height: 0px;
              line-height: 0px;
            }

            .navbar-toggle {
              /* (80px - button height 34px) / 2 = 23px */
              margin-top: 23px;
              padding: 9px 10px !important;
            }

            @media (min-width: 768px) {
              .navbar-nav > li > a {
                padding-top: 20.5px;
                padding-bottom: 20.5px;
              line-height: 100px;
              }
              /* CSS styles */
.rect-auto,.c100.p51 .slice,.c100.p52 .slice,.c100.p53 .slice,.c100.p54 .slice,.c100.p55 .slice,.c100.p56 .slice,.c100.p57 .slice,.c100.p58 .slice,.c100.p59 .slice,.c100.p60 .slice,.c100.p61 .slice,.c100.p62 .slice,.c100.p63 .slice,.c100.p64 .slice,.c100.p65 .slice,.c100.p66 .slice,.c100.p67 .slice,.c100.p68 .slice,.c100.p69 .slice,.c100.p70 .slice,.c100.p71 .slice,.c100.p72 .slice,.c100.p73 .slice,.c100.p74 .slice,.c100.p75 .slice,.c100.p76 .slice,.c100.p77 .slice,.c100.p78 .slice,.c100.p79 .slice,.c100.p80 .slice,.c100.p81 .slice,.c100.p82 .slice,.c100.p83 .slice,.c100.p84 .slice,.c100.p85 .slice,.c100.p86 .slice,.c100.p87 .slice,.c100.p88 .slice,.c100.p89 .slice,.c100.p90 .slice,.c100.p91 .slice,.c100.p92 .slice,.c100.p93 .slice,.c100.p94 .slice,.c100.p95 .slice,.c100.p96 .slice,.c100.p97 .slice,.c100.p98 .slice,.c100.p99 .slice,.c100.p100 .slice{clip:rect(auto, auto, auto, auto)}.pie,.c100 .bar,.c100.p51 .fill,.c100.p52 .fill,.c100.p53 .fill,.c100.p54 .fill,.c100.p55 .fill,.c100.p56 .fill,.c100.p57 .fill,.c100.p58 .fill,.c100.p59 .fill,.c100.p60 .fill,.c100.p61 .fill,.c100.p62 .fill,.c100.p63 .fill,.c100.p64 .fill,.c100.p65 .fill,.c100.p66 .fill,.c100.p67 .fill,.c100.p68 .fill,.c100.p69 .fill,.c100.p70 .fill,.c100.p71 .fill,.c100.p72 .fill,.c100.p73 .fill,.c100.p74 .fill,.c100.p75 .fill,.c100.p76 .fill,.c100.p77 .fill,.c100.p78 .fill,.c100.p79 .fill,.c100.p80 .fill,.c100.p81 .fill,.c100.p82 .fill,.c100.p83 .fill,.c100.p84 .fill,.c100.p85 .fill,.c100.p86 .fill,.c100.p87 .fill,.c100.p88 .fill,.c100.p89 .fill,.c100.p90 .fill,.c100.p91 .fill,.c100.p92 .fill,.c100.p93 .fill,.c100.p94 .fill,.c100.p95 .fill,.c100.p96 .fill,.c100.p97 .fill,.c100.p98 .fill,.c100.p99 .fill,.c100.p100 .fill{position:absolute;border:0.08em solid #307bbb;width:0.84em;height:0.84em;clip:rect(0em, 0.5em, 1em, 0em);-webkit-border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;-o-border-radius:50%;border-radius:50%;-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-ms-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg)}.pie-fill,.c100.p51 .bar:after,.c100.p51 .fill,.c100.p52 .bar:after,.c100.p52 .fill,.c100.p53 .bar:after,.c100.p53 .fill,.c100.p54 .bar:after,.c100.p54 .fill,.c100.p55 .bar:after,.c100.p55 .fill,.c100.p56 .bar:after,.c100.p56 .fill,.c100.p57 .bar:after,.c100.p57 .fill,.c100.p58 .bar:after,.c100.p58 .fill,.c100.p59 .bar:after,.c100.p59 .fill,.c100.p60 .bar:after,.c100.p60 .fill,.c100.p61 .bar:after,.c100.p61 .fill,.c100.p62 .bar:after,.c100.p62 .fill,.c100.p63 .bar:after,.c100.p63 .fill,.c100.p64 .bar:after,.c100.p64 .fill,.c100.p65 .bar:after,.c100.p65 .fill,.c100.p66 .bar:after,.c100.p66 .fill,.c100.p67 .bar:after,.c100.p67 .fill,.c100.p68 .bar:after,.c100.p68 .fill,.c100.p69 .bar:after,.c100.p69 .fill,.c100.p70 .bar:after,.c100.p70 .fill,.c100.p71 .bar:after,.c100.p71 .fill,.c100.p72 .bar:after,.c100.p72 .fill,.c100.p73 .bar:after,.c100.p73 .fill,.c100.p74 .bar:after,.c100.p74 .fill,.c100.p75 .bar:after,.c100.p75 .fill,.c100.p76 .bar:after,.c100.p76 .fill,.c100.p77 .bar:after,.c100.p77 .fill,.c100.p78 .bar:after,.c100.p78 .fill,.c100.p79 .bar:after,.c100.p79 .fill,.c100.p80 .bar:after,.c100.p80 .fill,.c100.p81 .bar:after,.c100.p81 .fill,.c100.p82 .bar:after,.c100.p82 .fill,.c100.p83 .bar:after,.c100.p83 .fill,.c100.p84 .bar:after,.c100.p84 .fill,.c100.p85 .bar:after,.c100.p85 .fill,.c100.p86 .bar:after,.c100.p86 .fill,.c100.p87 .bar:after,.c100.p87 .fill,.c100.p88 .bar:after,.c100.p88 .fill,.c100.p89 .bar:after,.c100.p89 .fill,.c100.p90 .bar:after,.c100.p90 .fill,.c100.p91 .bar:after,.c100.p91 .fill,.c100.p92 .bar:after,.c100.p92 .fill,.c100.p93 .bar:after,.c100.p93 .fill,.c100.p94 .bar:after,.c100.p94 .fill,.c100.p95 .bar:after,.c100.p95 .fill,.c100.p96 .bar:after,.c100.p96 .fill,.c100.p97 .bar:after,.c100.p97 .fill,.c100.p98 .bar:after,.c100.p98 .fill,.c100.p99 .bar:after,.c100.p99 .fill,.c100.p100 .bar:after,.c100.p100 .fill{-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);-o-transform:rotate(180deg);transform:rotate(180deg)}.c100{position:relative;font-size:120px;width:1em;height:1em;-webkit-border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;-o-border-radius:50%;border-radius:50%;float:left;margin:0 0.1em 0.1em 0;background-color:#cccccc}.c100 *,.c100 *:before,.c100 *:after{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.c100.center{float:none;margin:0 auto}.c100.big{font-size:240px}.c100.small{font-size:80px}.c100 > span{position:absolute;width:100%;z-index:1;left:0;top:0;width:5em;line-height:5em;font-size:0.2em;color:#cccccc;display:block;text-align:center;white-space:nowrap;-webkit-transition-property:all;-moz-transition-property:all;-o-transition-property:all;transition-property:all;-webkit-transition-duration:0.2s;-moz-transition-duration:0.2s;-o-transition-duration:0.2s;transition-duration:0.2s;-webkit-transition-timing-function:ease-out;-moz-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out}.c100:after{position:absolute;top:0.08em;left:0.08em;display:block;content:" ";-webkit-border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;-o-border-radius:50%;border-radius:50%;background-color:whitesmoke;width:0.84em;height:0.84em;-webkit-transition-property:all;-moz-transition-property:all;-o-transition-property:all;transition-property:all;-webkit-transition-duration:0.2s;-moz-transition-duration:0.2s;-o-transition-duration:0.2s;transition-duration:0.2s;-webkit-transition-timing-function:ease-in;-moz-transition-timing-function:ease-in;-o-transition-timing-function:ease-in;transition-timing-function:ease-in}.c100 .slice{position:absolute;width:1em;height:1em;clip:rect(0em, 1em, 1em, 0.5em)}.c100.p1 .bar{-webkit-transform:rotate(3.6deg);-moz-transform:rotate(3.6deg);-ms-transform:rotate(3.6deg);-o-transform:rotate(3.6deg);transform:rotate(3.6deg)}.c100.p2 .bar{-webkit-transform:rotate(7.2deg);-moz-transform:rotate(7.2deg);-ms-transform:rotate(7.2deg);-o-transform:rotate(7.2deg);transform:rotate(7.2deg)}.c100.p3 .bar{-webkit-transform:rotate(10.8deg);-moz-transform:rotate(10.8deg);-ms-transform:rotate(10.8deg);-o-transform:rotate(10.8deg);transform:rotate(10.8deg)}.c100.p4 .bar{-webkit-transform:rotate(14.4deg);-moz-transform:rotate(14.4deg);-ms-transform:rotate(14.4deg);-o-transform:rotate(14.4deg);transform:rotate(14.4deg)}.c100.p5 .bar{-webkit-transform:rotate(18deg);-moz-transform:rotate(18deg);-ms-transform:rotate(18deg);-o-transform:rotate(18deg);transform:rotate(18deg)}.c100.p6 .bar{-webkit-transform:rotate(21.6deg);-moz-transform:rotate(21.6deg);-ms-transform:rotate(21.6deg);-o-transform:rotate(21.6deg);transform:rotate(21.6deg)}.c100.p7 .bar{-webkit-transform:rotate(25.2deg);-moz-transform:rotate(25.2deg);-ms-transform:rotate(25.2deg);-o-transform:rotate(25.2deg);transform:rotate(25.2deg)}.c100.p8 .bar{-webkit-transform:rotate(28.8deg);-moz-transform:rotate(28.8deg);-ms-transform:rotate(28.8deg);-o-transform:rotate(28.8deg);transform:rotate(28.8deg)}.c100.p9 .bar{-webkit-transform:rotate(32.4deg);-moz-transform:rotate(32.4deg);-ms-transform:rotate(32.4deg);-o-transform:rotate(32.4deg);transform:rotate(32.4deg)}.c100.p10 .bar{-webkit-transform:rotate(36deg);-moz-transform:rotate(36deg);-ms-transform:rotate(36deg);-o-transform:rotate(36deg);transform:rotate(36deg)}.c100.p11 .bar{-webkit-transform:rotate(39.6deg);-moz-transform:rotate(39.6deg);-ms-transform:rotate(39.6deg);-o-transform:rotate(39.6deg);transform:rotate(39.6deg)}.c100.p12 .bar{-webkit-transform:rotate(43.2deg);-moz-transform:rotate(43.2deg);-ms-transform:rotate(43.2deg);-o-transform:rotate(43.2deg);transform:rotate(43.2deg)}.c100.p13 .bar{-webkit-transform:rotate(46.8deg);-moz-transform:rotate(46.8deg);-ms-transform:rotate(46.8deg);-o-transform:rotate(46.8deg);transform:rotate(46.8deg)}.c100.p14 .bar{-webkit-transform:rotate(50.4deg);-moz-transform:rotate(50.4deg);-ms-transform:rotate(50.4deg);-o-transform:rotate(50.4deg);transform:rotate(50.4deg)}.c100.p15 .bar{-webkit-transform:rotate(54deg);-moz-transform:rotate(54deg);-ms-transform:rotate(54deg);-o-transform:rotate(54deg);transform:rotate(54deg)}.c100.p16 .bar{-webkit-transform:rotate(57.6deg);-moz-transform:rotate(57.6deg);-ms-transform:rotate(57.6deg);-o-transform:rotate(57.6deg);transform:rotate(57.6deg)}.c100.p17 .bar{-webkit-transform:rotate(61.2deg);-moz-transform:rotate(61.2deg);-ms-transform:rotate(61.2deg);-o-transform:rotate(61.2deg);transform:rotate(61.2deg)}.c100.p18 .bar{-webkit-transform:rotate(64.8deg);-moz-transform:rotate(64.8deg);-ms-transform:rotate(64.8deg);-o-transform:rotate(64.8deg);transform:rotate(64.8deg)}.c100.p19 .bar{-webkit-transform:rotate(68.4deg);-moz-transform:rotate(68.4deg);-ms-transform:rotate(68.4deg);-o-transform:rotate(68.4deg);transform:rotate(68.4deg)}.c100.p20 .bar{-webkit-transform:rotate(72deg);-moz-transform:rotate(72deg);-ms-transform:rotate(72deg);-o-transform:rotate(72deg);transform:rotate(72deg)}.c100.p21 .bar{-webkit-transform:rotate(75.6deg);-moz-transform:rotate(75.6deg);-ms-transform:rotate(75.6deg);-o-transform:rotate(75.6deg);transform:rotate(75.6deg)}.c100.p22 .bar{-webkit-transform:rotate(79.2deg);-moz-transform:rotate(79.2deg);-ms-transform:rotate(79.2deg);-o-transform:rotate(79.2deg);transform:rotate(79.2deg)}.c100.p23 .bar{-webkit-transform:rotate(82.8deg);-moz-transform:rotate(82.8deg);-ms-transform:rotate(82.8deg);-o-transform:rotate(82.8deg);transform:rotate(82.8deg)}.c100.p24 .bar{-webkit-transform:rotate(86.4deg);-moz-transform:rotate(86.4deg);-ms-transform:rotate(86.4deg);-o-transform:rotate(86.4deg);transform:rotate(86.4deg)}.c100.p25 .bar{-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);-o-transform:rotate(90deg);transform:rotate(90deg)}.c100.p26 .bar{-webkit-transform:rotate(93.6deg);-moz-transform:rotate(93.6deg);-ms-transform:rotate(93.6deg);-o-transform:rotate(93.6deg);transform:rotate(93.6deg)}.c100.p27 .bar{-webkit-transform:rotate(97.2deg);-moz-transform:rotate(97.2deg);-ms-transform:rotate(97.2deg);-o-transform:rotate(97.2deg);transform:rotate(97.2deg)}.c100.p28 .bar{-webkit-transform:rotate(100.8deg);-moz-transform:rotate(100.8deg);-ms-transform:rotate(100.8deg);-o-transform:rotate(100.8deg);transform:rotate(100.8deg)}.c100.p29 .bar{-webkit-transform:rotate(104.4deg);-moz-transform:rotate(104.4deg);-ms-transform:rotate(104.4deg);-o-transform:rotate(104.4deg);transform:rotate(104.4deg)}.c100.p30 .bar{-webkit-transform:rotate(108deg);-moz-transform:rotate(108deg);-ms-transform:rotate(108deg);-o-transform:rotate(108deg);transform:rotate(108deg)}.c100.p31 .bar{-webkit-transform:rotate(111.6deg);-moz-transform:rotate(111.6deg);-ms-transform:rotate(111.6deg);-o-transform:rotate(111.6deg);transform:rotate(111.6deg)}.c100.p32 .bar{-webkit-transform:rotate(115.2deg);-moz-transform:rotate(115.2deg);-ms-transform:rotate(115.2deg);-o-transform:rotate(115.2deg);transform:rotate(115.2deg)}.c100.p33 .bar{-webkit-transform:rotate(118.8deg);-moz-transform:rotate(118.8deg);-ms-transform:rotate(118.8deg);-o-transform:rotate(118.8deg);transform:rotate(118.8deg)}.c100.p34 .bar{-webkit-transform:rotate(122.4deg);-moz-transform:rotate(122.4deg);-ms-transform:rotate(122.4deg);-o-transform:rotate(122.4deg);transform:rotate(122.4deg)}.c100.p35 .bar{-webkit-transform:rotate(126deg);-moz-transform:rotate(126deg);-ms-transform:rotate(126deg);-o-transform:rotate(126deg);transform:rotate(126deg)}.c100.p36 .bar{-webkit-transform:rotate(129.6deg);-moz-transform:rotate(129.6deg);-ms-transform:rotate(129.6deg);-o-transform:rotate(129.6deg);transform:rotate(129.6deg)}.c100.p37 .bar{-webkit-transform:rotate(133.2deg);-moz-transform:rotate(133.2deg);-ms-transform:rotate(133.2deg);-o-transform:rotate(133.2deg);transform:rotate(133.2deg)}.c100.p38 .bar{-webkit-transform:rotate(136.8deg);-moz-transform:rotate(136.8deg);-ms-transform:rotate(136.8deg);-o-transform:rotate(136.8deg);transform:rotate(136.8deg)}.c100.p39 .bar{-webkit-transform:rotate(140.4deg);-moz-transform:rotate(140.4deg);-ms-transform:rotate(140.4deg);-o-transform:rotate(140.4deg);transform:rotate(140.4deg)}.c100.p40 .bar{-webkit-transform:rotate(144deg);-moz-transform:rotate(144deg);-ms-transform:rotate(144deg);-o-transform:rotate(144deg);transform:rotate(144deg)}.c100.p41 .bar{-webkit-transform:rotate(147.6deg);-moz-transform:rotate(147.6deg);-ms-transform:rotate(147.6deg);-o-transform:rotate(147.6deg);transform:rotate(147.6deg)}.c100.p42 .bar{-webkit-transform:rotate(151.2deg);-moz-transform:rotate(151.2deg);-ms-transform:rotate(151.2deg);-o-transform:rotate(151.2deg);transform:rotate(151.2deg)}.c100.p43 .bar{-webkit-transform:rotate(154.8deg);-moz-transform:rotate(154.8deg);-ms-transform:rotate(154.8deg);-o-transform:rotate(154.8deg);transform:rotate(154.8deg)}.c100.p44 .bar{-webkit-transform:rotate(158.4deg);-moz-transform:rotate(158.4deg);-ms-transform:rotate(158.4deg);-o-transform:rotate(158.4deg);transform:rotate(158.4deg)}.c100.p45 .bar{-webkit-transform:rotate(162deg);-moz-transform:rotate(162deg);-ms-transform:rotate(162deg);-o-transform:rotate(162deg);transform:rotate(162deg)}.c100.p46 .bar{-webkit-transform:rotate(165.6deg);-moz-transform:rotate(165.6deg);-ms-transform:rotate(165.6deg);-o-transform:rotate(165.6deg);transform:rotate(165.6deg)}.c100.p47 .bar{-webkit-transform:rotate(169.2deg);-moz-transform:rotate(169.2deg);-ms-transform:rotate(169.2deg);-o-transform:rotate(169.2deg);transform:rotate(169.2deg)}.c100.p48 .bar{-webkit-transform:rotate(172.8deg);-moz-transform:rotate(172.8deg);-ms-transform:rotate(172.8deg);-o-transform:rotate(172.8deg);transform:rotate(172.8deg)}.c100.p49 .bar{-webkit-transform:rotate(176.4deg);-moz-transform:rotate(176.4deg);-ms-transform:rotate(176.4deg);-o-transform:rotate(176.4deg);transform:rotate(176.4deg)}.c100.p50 .bar{-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);-o-transform:rotate(180deg);transform:rotate(180deg)}.c100.p51 .bar{-webkit-transform:rotate(183.6deg);-moz-transform:rotate(183.6deg);-ms-transform:rotate(183.6deg);-o-transform:rotate(183.6deg);transform:rotate(183.6deg)}.c100.p52 .bar{-webkit-transform:rotate(187.2deg);-moz-transform:rotate(187.2deg);-ms-transform:rotate(187.2deg);-o-transform:rotate(187.2deg);transform:rotate(187.2deg)}.c100.p53 .bar{-webkit-transform:rotate(190.8deg);-moz-transform:rotate(190.8deg);-ms-transform:rotate(190.8deg);-o-transform:rotate(190.8deg);transform:rotate(190.8deg)}.c100.p54 .bar{-webkit-transform:rotate(194.4deg);-moz-transform:rotate(194.4deg);-ms-transform:rotate(194.4deg);-o-transform:rotate(194.4deg);transform:rotate(194.4deg)}.c100.p55 .bar{-webkit-transform:rotate(198deg);-moz-transform:rotate(198deg);-ms-transform:rotate(198deg);-o-transform:rotate(198deg);transform:rotate(198deg)}.c100.p56 .bar{-webkit-transform:rotate(201.6deg);-moz-transform:rotate(201.6deg);-ms-transform:rotate(201.6deg);-o-transform:rotate(201.6deg);transform:rotate(201.6deg)}.c100.p57 .bar{-webkit-transform:rotate(205.2deg);-moz-transform:rotate(205.2deg);-ms-transform:rotate(205.2deg);-o-transform:rotate(205.2deg);transform:rotate(205.2deg)}.c100.p58 .bar{-webkit-transform:rotate(208.8deg);-moz-transform:rotate(208.8deg);-ms-transform:rotate(208.8deg);-o-transform:rotate(208.8deg);transform:rotate(208.8deg)}.c100.p59 .bar{-webkit-transform:rotate(212.4deg);-moz-transform:rotate(212.4deg);-ms-transform:rotate(212.4deg);-o-transform:rotate(212.4deg);transform:rotate(212.4deg)}.c100.p60 .bar{-webkit-transform:rotate(216deg);-moz-transform:rotate(216deg);-ms-transform:rotate(216deg);-o-transform:rotate(216deg);transform:rotate(216deg)}.c100.p61 .bar{-webkit-transform:rotate(219.6deg);-moz-transform:rotate(219.6deg);-ms-transform:rotate(219.6deg);-o-transform:rotate(219.6deg);transform:rotate(219.6deg)}.c100.p62 .bar{-webkit-transform:rotate(223.2deg);-moz-transform:rotate(223.2deg);-ms-transform:rotate(223.2deg);-o-transform:rotate(223.2deg);transform:rotate(223.2deg)}.c100.p63 .bar{-webkit-transform:rotate(226.8deg);-moz-transform:rotate(226.8deg);-ms-transform:rotate(226.8deg);-o-transform:rotate(226.8deg);transform:rotate(226.8deg)}.c100.p64 .bar{-webkit-transform:rotate(230.4deg);-moz-transform:rotate(230.4deg);-ms-transform:rotate(230.4deg);-o-transform:rotate(230.4deg);transform:rotate(230.4deg)}.c100.p65 .bar{-webkit-transform:rotate(234deg);-moz-transform:rotate(234deg);-ms-transform:rotate(234deg);-o-transform:rotate(234deg);transform:rotate(234deg)}.c100.p66 .bar{-webkit-transform:rotate(237.6deg);-moz-transform:rotate(237.6deg);-ms-transform:rotate(237.6deg);-o-transform:rotate(237.6deg);transform:rotate(237.6deg)}.c100.p67 .bar{-webkit-transform:rotate(241.2deg);-moz-transform:rotate(241.2deg);-ms-transform:rotate(241.2deg);-o-transform:rotate(241.2deg);transform:rotate(241.2deg)}.c100.p68 .bar{-webkit-transform:rotate(244.8deg);-moz-transform:rotate(244.8deg);-ms-transform:rotate(244.8deg);-o-transform:rotate(244.8deg);transform:rotate(244.8deg)}.c100.p69 .bar{-webkit-transform:rotate(248.4deg);-moz-transform:rotate(248.4deg);-ms-transform:rotate(248.4deg);-o-transform:rotate(248.4deg);transform:rotate(248.4deg)}.c100.p70 .bar{-webkit-transform:rotate(252deg);-moz-transform:rotate(252deg);-ms-transform:rotate(252deg);-o-transform:rotate(252deg);transform:rotate(252deg)}.c100.p71 .bar{-webkit-transform:rotate(255.6deg);-moz-transform:rotate(255.6deg);-ms-transform:rotate(255.6deg);-o-transform:rotate(255.6deg);transform:rotate(255.6deg)}.c100.p72 .bar{-webkit-transform:rotate(259.2deg);-moz-transform:rotate(259.2deg);-ms-transform:rotate(259.2deg);-o-transform:rotate(259.2deg);transform:rotate(259.2deg)}.c100.p73 .bar{-webkit-transform:rotate(262.8deg);-moz-transform:rotate(262.8deg);-ms-transform:rotate(262.8deg);-o-transform:rotate(262.8deg);transform:rotate(262.8deg)}.c100.p74 .bar{-webkit-transform:rotate(266.4deg);-moz-transform:rotate(266.4deg);-ms-transform:rotate(266.4deg);-o-transform:rotate(266.4deg);transform:rotate(266.4deg)}.c100.p75 .bar{-webkit-transform:rotate(270deg);-moz-transform:rotate(270deg);-ms-transform:rotate(270deg);-o-transform:rotate(270deg);transform:rotate(270deg)}.c100.p76 .bar{-webkit-transform:rotate(273.6deg);-moz-transform:rotate(273.6deg);-ms-transform:rotate(273.6deg);-o-transform:rotate(273.6deg);transform:rotate(273.6deg)}.c100.p77 .bar{-webkit-transform:rotate(277.2deg);-moz-transform:rotate(277.2deg);-ms-transform:rotate(277.2deg);-o-transform:rotate(277.2deg);transform:rotate(277.2deg)}.c100.p78 .bar{-webkit-transform:rotate(280.8deg);-moz-transform:rotate(280.8deg);-ms-transform:rotate(280.8deg);-o-transform:rotate(280.8deg);transform:rotate(280.8deg)}.c100.p79 .bar{-webkit-transform:rotate(284.4deg);-moz-transform:rotate(284.4deg);-ms-transform:rotate(284.4deg);-o-transform:rotate(284.4deg);transform:rotate(284.4deg)}.c100.p80 .bar{-webkit-transform:rotate(288deg);-moz-transform:rotate(288deg);-ms-transform:rotate(288deg);-o-transform:rotate(288deg);transform:rotate(288deg)}.c100.p81 .bar{-webkit-transform:rotate(291.6deg);-moz-transform:rotate(291.6deg);-ms-transform:rotate(291.6deg);-o-transform:rotate(291.6deg);transform:rotate(291.6deg)}.c100.p82 .bar{-webkit-transform:rotate(295.2deg);-moz-transform:rotate(295.2deg);-ms-transform:rotate(295.2deg);-o-transform:rotate(295.2deg);transform:rotate(295.2deg)}.c100.p83 .bar{-webkit-transform:rotate(298.8deg);-moz-transform:rotate(298.8deg);-ms-transform:rotate(298.8deg);-o-transform:rotate(298.8deg);transform:rotate(298.8deg)}.c100.p84 .bar{-webkit-transform:rotate(302.4deg);-moz-transform:rotate(302.4deg);-ms-transform:rotate(302.4deg);-o-transform:rotate(302.4deg);transform:rotate(302.4deg)}.c100.p85 .bar{-webkit-transform:rotate(306deg);-moz-transform:rotate(306deg);-ms-transform:rotate(306deg);-o-transform:rotate(306deg);transform:rotate(306deg)}.c100.p86 .bar{-webkit-transform:rotate(309.6deg);-moz-transform:rotate(309.6deg);-ms-transform:rotate(309.6deg);-o-transform:rotate(309.6deg);transform:rotate(309.6deg)}.c100.p87 .bar{-webkit-transform:rotate(313.2deg);-moz-transform:rotate(313.2deg);-ms-transform:rotate(313.2deg);-o-transform:rotate(313.2deg);transform:rotate(313.2deg)}.c100.p88 .bar{-webkit-transform:rotate(316.8deg);-moz-transform:rotate(316.8deg);-ms-transform:rotate(316.8deg);-o-transform:rotate(316.8deg);transform:rotate(316.8deg)}.c100.p89 .bar{-webkit-transform:rotate(320.4deg);-moz-transform:rotate(320.4deg);-ms-transform:rotate(320.4deg);-o-transform:rotate(320.4deg);transform:rotate(320.4deg)}.c100.p90 .bar{-webkit-transform:rotate(324deg);-moz-transform:rotate(324deg);-ms-transform:rotate(324deg);-o-transform:rotate(324deg);transform:rotate(324deg)}.c100.p91 .bar{-webkit-transform:rotate(327.6deg);-moz-transform:rotate(327.6deg);-ms-transform:rotate(327.6deg);-o-transform:rotate(327.6deg);transform:rotate(327.6deg)}.c100.p92 .bar{-webkit-transform:rotate(331.2deg);-moz-transform:rotate(331.2deg);-ms-transform:rotate(331.2deg);-o-transform:rotate(331.2deg);transform:rotate(331.2deg)}.c100.p93 .bar{-webkit-transform:rotate(334.8deg);-moz-transform:rotate(334.8deg);-ms-transform:rotate(334.8deg);-o-transform:rotate(334.8deg);transform:rotate(334.8deg)}.c100.p94 .bar{-webkit-transform:rotate(338.4deg);-moz-transform:rotate(338.4deg);-ms-transform:rotate(338.4deg);-o-transform:rotate(338.4deg);transform:rotate(338.4deg)}.c100.p95 .bar{-webkit-transform:rotate(342deg);-moz-transform:rotate(342deg);-ms-transform:rotate(342deg);-o-transform:rotate(342deg);transform:rotate(342deg)}.c100.p96 .bar{-webkit-transform:rotate(345.6deg);-moz-transform:rotate(345.6deg);-ms-transform:rotate(345.6deg);-o-transform:rotate(345.6deg);transform:rotate(345.6deg)}.c100.p97 .bar{-webkit-transform:rotate(349.2deg);-moz-transform:rotate(349.2deg);-ms-transform:rotate(349.2deg);-o-transform:rotate(349.2deg);transform:rotate(349.2deg)}.c100.p98 .bar{-webkit-transform:rotate(352.8deg);-moz-transform:rotate(352.8deg);-ms-transform:rotate(352.8deg);-o-transform:rotate(352.8deg);transform:rotate(352.8deg)}.c100.p99 .bar{-webkit-transform:rotate(356.4deg);-moz-transform:rotate(356.4deg);-ms-transform:rotate(356.4deg);-o-transform:rotate(356.4deg);transform:rotate(356.4deg)}.c100.p100 .bar{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}.c100:hover{cursor:default}.c100:hover > span{width:3.33em;line-height:3.33em;font-size:0.3em;color:#307bbb}.c100:hover:after{top:0.04em;left:0.04em;width:0.92em;height:0.92em}.c100.dark{background-color:#777777}.c100.dark .bar,.c100.dark .fill{border-color:#c6ff00 !important}.c100.dark > span{color:#777777}.c100.dark:after{background-color:#666666}.c100.dark:hover > span{color:#c6ff00}.c100.green .bar,.c100.green .fill{border-color:#4db53c !important}.c100.green:hover > span{color:#4db53c}.c100.green.dark .bar,.c100.green.dark .fill{border-color:#5fd400 !important}.c100.green.dark:hover > span{color:#5fd400}.c100.orange .bar,.c100.orange .fill{border-color:#dd9d22 !important}.c100.orange:hover > span{color:#dd9d22}.c100.orange.dark .bar,.c100.orange.dark .fill{border-color:#e08833 !important}.c100.orange.dark:hover > span{color:#e08833}

 
}

        </style>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body class="antialiased">
      <!-- Navbar --><nav class="navbar navbar-expand-lg navbar-light bg-light"><!-- Container wrapper -->
<div class="container-fluid"><!-- Toggle button --> <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> </button> <!-- Collapsible wrapper -->
<div style="padding-bottom: 0px;" id="navbarSupportedContent" class="collapse navbar-collapse"><!-- Navbar brand -->
 <a style="  padding-top: 0.5px;
    padding-bottom: 0.5px;
  line-height: 1px;" > <img  src="img/qwe.png" alt="Logo" height="37" /> </a> <!-- Left links -->
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item"><a class="nav-link" >Vacunación Universidad Mariana</a></li>
</ul>
<!-- Left links --></div>
<!-- Collapsible wrapper --> <!-- Right elements -->
<div class="d-flex align-items-center"><!-- Icon --> <!-- Notifications -->


</div>
<!-- Right elements --></div>
<!-- Container wrapper --></nav><!-- Navbar -->
    <div >
    @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
   
  @endif
  @if(session('status1'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('status1') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
   
  @endif

  <div style="padding-bottom: 0px;">
  </div>
<img style="width:50%;  display: block;
  margin: auto;"  src="img/abc1.png" alt="">
</div>


    <div class="container" style="padding-top: 10px;padding-bottom: 20px;">
    <div class="row">
        <div class="col-md-12 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">


                        <div class="card-header">
                            <h3 class="mb-0">Registrar Vacuna</h3>
                        </div>
                        <div class="card-body" style="padding-bottom: 20px;">

                        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputEmail2">Identificacion</label>
      <input  name="a1" type="text" class="form-control" id="inputEmail2" placeholder="123">
    </div>
    <div class="form-group col-md-6">
    <label for="inputEmail3">Fecha</label>
    @php
    $date = date('Y-m-d');
@endphp
<input name="a2" type="date" class="form-control" id="inputEmail3"   placeholder="2018-07-22" min="2020-06-01" max="{{$date}}" required>
  </div>
  
    <div class="form-group col-md-4">
      <label for="inputState">Nombre Vacuna</label>
      <select name="a3"  id="inputEmail4" class="form-control">
      <option selected>Pfizer</option>
        <option>Moderna</option>
        <option>AstraZeneca</option>
        <option>Sputnik</option>
        <option>SinoVac</option>
        <option>Abdala</option>
        <option>Bharat</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Dosis a registrar</label>
      <select name="a4" id="inputEmail5" class="form-control">
        <option selected>1</option>
        <option>2</option>
      </select>
    </div>

    </div>
  </div>
  <button type="submit" class="btn btn-primary">Continuar</button>
</form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->



<div class="container" style="padding-top: 0px;padding-bottom: 20px;">
    <div class="row">
        <div class="col-md-12 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Citas</h3>
                        </div>
                        <div class="card-body" style="padding-bottom: 20px;">
                        <form name="add-blog-post-form1" id="add-blog-post-form" method="post" action="{{url('store-form1')}}">
       @csrf

       <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputEmail8">Identificacion</label>
      <input name="b1" type="text" class="form-control" id="inputEmail2" placeholder="123" required>
    </div>
    <div class="form-group col-md-6">
    <label for="inputEmail9">Fecha</label>
    <input  id="ejemplov0" name="b2" type="date" class="form-control" id="inputEmail3"   placeholder="2018-07-22" min="2020-01-01" max="2022-06-20" required>
  </div>
       </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
          $('#ejemplov0').change(function() {
    var date = $(this).val();
    var categoryID = $(this).val();
               if(categoryID) {
                   $.ajax({
                       url: '/getCourse/'+categoryID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#ejemplov3').empty();
                            $.each(data, function(valor,value){
                                $('#ejemplov3').append('<option value="'+ value +'">' +value+ '</option>');
                            });
                        }else{
                            $('#ejemplov3').empty();
                        }
                     }
                   });
               }else{
                 $('#ejemplov3').empty();
               }
        
});
        </script>
    <div class="form-group col-md-4">
      <label for="inputState">Hora</label>
      <select id="ejemplov3"  name="b3" id="inputEmail11" class="form-control">
        <option selected></option>
      </select>
    </div>

    </div>
    <button type="submit" class="btn btn-primary ">Continuar</button>
  </div>

</form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->






<div class="container" style="padding-top: 0px;padding-bottom: 20px;">
    <div class="row">
        <div class="col-md-12 min-vh-5 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Consulta individual</h3>
                        </div>
                        <div class="card-body" style="padding-bottom: 20px;">
                        <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail6">Consultar por identificacion</label>
      <div class="row">
  <div class="col-8"> <input id="ejemplov5"  type="text" class="form-control" id="inputEmail7" placeholder="123"></div>
  <div class="col-4">  <button type="button" class="btn btn-primary">
    <i class="fa fa-search"></i>
  </button></div>
</div>
     
     

    </div>
      </div>
      <label>Dosis aplicadas: </label> <input  id="ejemplov10" type="text" name="firstname" placeholder="" disabled>
      <script>
          $('#ejemplov5').change(function() {
    var date = $(this).val();
    var categoryID = $(this).val();
               if(categoryID) {
                   $.ajax({
                       url: '/getCourse1/'+categoryID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#ejemplov10').empty();
                                $("#ejemplov10").val(data);
                          
                        }else{
                            $("#ejemplov10").val("sin vacunas registradas");
                        }
                     }
                   });
               }else{
                $("#ejemplov10").val("sin vacunas registradas");
               }
        
});
        </script>
  </div>
</form>
                        </div>



                        
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->





<div class="container" style="padding-top: 0px;padding-bottom: 20px;">
    <div class="row">
        <div class="col-md-12 min-vh-5 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Consulta general</h3>
                        </div>
                        <div class="card-body" style="padding-bottom: 20px;">
                        <form>


    <div class="form-group col-md-8">
      <label for="inputState">Consultar numero de vacunados por dosis</label>
      <select id="ejemplov11" class="form-control">
        <option selected> </option>
        <option >1</option>
        <option>2</option>
      </select>
    </div>
    <div style="padding-left: 15px;">
    <label>Porcentaje de estudiantes vacunados: </label> 
  
    <div id="ejemplovb0"> 
    <input  id="ejemplov100" type="text" name="firstname" placeholder="" disabled>
  </div>
  </div>
  @php
  $porcentajev2=50;
@endphp
      <script>
          $('#ejemplov11').change(function() {
    var date = $(this).val();
    var categoryID = $(this).val();
               if(categoryID) {
                   $.ajax({
                       url: '/getCourse3/'+categoryID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
           
                          $("#porcentajev5").load(" #porcentajev5 > *");
                                $("#ejemplov100").val(data );
                                $porcentajev2 = '30';
                                $("#porcentajev5").load(location.href + " #porcentajev5");
                          
                        }else{
                            $("#ejemplov100").val("0 %");
                        }
                     }
                   });
               }else{
                $("#ejemplov100").val("0 %");
               }
        
});
        </script>
  </div>
 
</form>
                  <div  id="porcentajev5" >
<div class="c100 p{{$porcentajev2}} center">
    <span  id="porcentajev1">{{$porcentajev2}}%</span>
    <div class="slice">
        <div class="bar"></div>
        <div class="fill"></div>
    </div>
</div>
</div> 
                        </div>
                        </div>


                        
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->



   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>






