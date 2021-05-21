#MaxMem 256 
#MaxHotkeysPerInterval 200
#MaxThreadsPerHotkey 3
#MaxThreads 4
#HotkeyInterval 2000  
#Hotstring NoMouse
#Hotstring EndChars NewChars
#Hotstring NewOptions
num = 0
coordx = 250
coordy = 250
;Random, coordx, 1, 500
;Random, coordy, 1, 500

Gui, color, 000000

x = 0
y = 0



xx = 0
yy = 0


Random x, -10, 10
Random y, -10, 10

Random xx, -10, 10
Random yy, -10, 10

;coordx += 10
;coordy += 10
; Gui, Add, Picture, x%coordx% y%coordy% vimatge, D:\programes.ahk\BOBS\ARK\bob.png
;Gui, Add, Button, gsum w160 h20 x%coordx% y%coordy% vboto , pitjar aquet buto 
   ;Gui, Add, Button,  w160 h20 x%coordx% y%coordy% vboto , pilota
;Gui, Font, cBlue 
;Gui, Add, Link, w160 h20 x2 y2 vtext gsum,Merdes put4
;Gui, Add, Text, w160 h20 x2 y2 vprova1, Punts= %num% ; 000000000000001
Gui, Show, w1000 h700, afecte pilota xungu 
Gui, Font, s20, Verdana
;Gui, Font, cBlue

goto moviment
moviment:

Loop, 1 {
Sleep 1

coordx += %x%
coordy += %y%
coordxx += %xx%
coordyy += %yy%
;GuiControl Move, imatge, x%coordx% y%coordy%
;GuiControl Move, boto, x%coordx% y%coordy%
;GuiControl Move, text, x%coordx% y%coordy%
;Gui, Add, Text, x%coordx% y%coordy%, a
Random, numero , 0, 9
Random , numero2, 0, 9
Gui, Add, Text, x%coordx% y%coordy% , %numero%
;Gui, Add, Text, x%coordxx% y%coordyy%, b
Gui, Add, Text, x%coordxx% y%coordyy%, %numero2%
GuiControl, , prova1, Punts= %num%

;sum:
;num += 10
;return

if coordx > 1000
goto esq
if coordx < 0
goto dret
if coordy < 0
goto avall
if coordy > 700
goto amunt
;-----------------------------

if coordxx > 1000
goto esq2
if coordxx < 0
goto dret2
if coordyy < 0
goto avall2
if coordyy > 700
goto amunt2

if x = 0
goto cx
if y = 0
goto cy
if xx = 0
goto cxx
if yy = 0
goto cyy



}

Random col, 1, 6

if col = 1
goto 1

if col = 2
goto 2

if col = 3
goto 3

if col = 4
goto 4

if col = 5
goto 5

if col = 6
goto 6



1:
Gui, Font, cRed
goto moviment


2:
Gui, Font, c800080
goto moviment

3:
Gui, Font, cBlue
goto moviment

4:
Gui, Font, cYellow
goto moviment

5:
Gui, Font, cLime
goto moviment

6:
Gui, Font, cAqua
goto moviment


esq:
;x = -5
Random x, -10, -1
goto moviment

dret:
;x = 5
Random x, 1, 10
goto moviment
avall:
;y = 5
Random y, 1, 10
goto moviment
amunt:
;y = -5
Random y, -10, -1
goto moviment

;--------------------------------------

esq2:
;xx = -5
Random xx, -10, -1
goto moviment

dret2:
;xx = 5
Random xx, 1, 10
goto moviment
avall2:
;yy = 5
Random yy, 1, 10
goto moviment
amunt2:
;yy = -5
Random yy, -10, -1
goto moviment

cx:
x = 5
goto moviment
cy:
y = 5
goto moviment

cxx:
xx = 5
goto moviment
cyy:
yy = 5
goto moviment


Esc::ExitApp