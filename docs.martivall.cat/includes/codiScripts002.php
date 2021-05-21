;#MaxMem 256 
;#MaxHotkeysPerInterval 200
;#MaxThreadsPerHotkey 3
;#MaxThreads 4
;#HotkeyInterval 2000  
;#Hotstring NoMouse
;#Hotstring EndChars NewChars
;#Hotstring NewOptions
num = 0
coordx = 250
coordy = 250
;Random, coordx, 1, 500
;Random, coordy, 1, 500

Gui, color, 000000
Gui, Font, cLime

a = 0
b = 100
c = 200
d = 300
e = 400
f = 500
g = 600
h = 700
i = 800



ya = 0
yb = -100
yc = -200
yd = -300
ye = -400
yf = -500
yg = -600
yh = -700
yi = -800


aa = 0
bb = 0
cc = 0
dd = 0
ee = 0
ff = 0
gg = 0
hh = 0
ii = 0

Random, aa, 0, 1
Random, bb, 0, 1
Random, cc, 0, 1
Random, dd, 0, 1
Random, ee, 0, 1
Random, ff, 0, 1
Random, gg, 0, 1
Random, hh, 0, 1
Random, ii, 0, 1





;coordx += 10
;coordy += 10
; Gui, Add, Picture, x%coordx% y%coordy% vimatge, D:\programes.ahk\BOBS\ARK\bob.png
;Gui, Add, Button, gsum w160 h20 x%coordx% y%coordy% vboto , pitjar aquet buto 
   ;Gui, Add, Button,  w160 h20 x%coordx% y%coordy% vboto , pilota
;Gui, Font, cBlue 
;Gui, Add, Link, w160 h20 x2 y2 vtext gsum,Merdes put4
;Gui, Add, Text, w160 h20 x2 y2 vprova1, Punts= %num% ; 000000000000001
Gui, Show, w1000 h700, afecte pilota xungu 

goto moviment
moviment:

Loop, {
Sleep 1
x += 0
ya += 10
yb += 10
yc += 10
yd += 10
ye += 10
yf += 10
yg += 10
yh += 10
yi += 10
coordxa = %a%
coordxb = %b%
coordxc = %c%
coordxd = %d%
coordxe = %e%
coordxf = %f%
coordxg = %g%
coordxh = %h%
coordxi = %i%

coordya = %ya%
coordyb = %yb%
coordyc = %yc%
coordyd = %yd%
coordye = %ye%
coordyf = %yf%
coordyg = %yg%
coordyh = %yh%
coordyi = %yi%









Random, numero , 0, 9

Gui, Add, Text, x%coordxa% y%coordya% , %aa%
Gui, Add, Text, x%coordxb% y%coordyb% , %bb%
Gui, Add, Text, x%coordxc% y%coordyc% , %cc%
Gui, Add, Text, x%coordxd% y%coordyd% , %dd%
Gui, Add, Text, x%coordxe% y%coordye% , %ee%
Gui, Add, Text, x%coordxf% y%coordyf% , %ff%
Gui, Add, Text, x%coordxg% y%coordyg% , %gg%
Gui, Add, Text, x%coordxh% y%coordyh% , %hh%
Gui, Add, Text, x%coordxi% y%coordyi% , %ii%


if ya > 700
goto a
if yb > 700
goto b
if yc > 700
goto c
if yd > 700
goto d
if ye > 700
goto e
if yf > 700
goto f
if yg > 700
goto g
if yh > 700
goto h
if yi > 700
goto i







}

a:
Random, a, 0, 1000
ya = 0
goto moviment

b:
Random, b, 0, 1000
yb = 0
goto moviment

c:
Random, c, 0, 1000
yc = 0
goto moviment

d:
Random, d, 0, 1000
yd = 0
goto moviment

e:
Random, e, 0, 1000
ye = 0
goto moviment

f:
Random, f, 0, 1000
yf = 0
goto moviment

g:
Random, g, 0, 1000
yg = 0
goto moviment

h:
Random, h, 0, 1000
yh = 0
goto moviment

i:
Random, i, 0, 1000
yi = 0
goto moviment

Random, b, 0, 1000
Random, c, 0, 1000
Random, d, 0, 1000
Random, f, 0, 1000
Random, g, 0, 1000
Random, h, 0, 1000
Random, i, 0, 1000
Random, g, 0, 1000










Esc::ExitApp