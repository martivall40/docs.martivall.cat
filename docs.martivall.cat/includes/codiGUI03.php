diners = 0
sum1 = 0
sum2 = 0
mlvl = 1
millorar_mina = 10
desmin1 = 50
m_min1 = 100
desmin2 = 500
m_min2 = 1000
su1 = 0
numrand = 0
coordx = 750
coordy = 300
cofre = 1
numcofre1 = 0
numcofre2 = 9
numcofre3 = 19
xc = 470
yc = 30
rec1 = 0
rec2 = 0
rec3 = 0

Gui, Font, s10, Verdana
Gui, Add, Button, gmina  x200 y50 vmina , mina lvl %mlvl%
Gui, Add, Button, gm_mina  x200 y90 vm_mina , millorar mina costa 10
;Gui, Add, Button, gbotiga1 w160 h20 x150 y10 vbotiga1 , botiga1
Gui, Add, Text, w160 h20 x2 y2 vdiners, Diners= %diners%
Gui, Add, Button, gdesmin1 x50 y300 vdesmin1, %desmin1%$ per desbloquejar
Gui, Add, Button, gdesmin2 x300 y300 vdesmin2, %desmin2%$ per desbloquejar
Gui, Add, Text, x600 y7, MINIJOC
Gui, Add, Text, x600 y40, atrapar el cunill guanyes 100$, cabra 200$
Gui, Add, Text, x600 y65,  i x el drac gyanues 500$
Gui, Add, Button, gclik1 w160 h20 x%coordx% y%coordy% vcunill , cunill 
Gui, Add, Button, gclik2 w160 h20 x%coordx% y%coordy% vcabra , cabra  
Gui, Add, Button, gclik3 w160 h20 x%coordx% y%coordy% vdrac , drac
GuiControl, hide, cabra
GuiControl, hide, drac
;anticGui, Add, Button, gcofre x470 y30 vcofre, cofre
;anticGuiControl, hide, cofre
Gui, Add, Text, x50 y150 , historial
Gui, Add, Text, x10 y200 w500 vhist, 
Gui, Show, w1000 h500, joc

goto moviment
moviment:
Loop, 7 {
Sleep 100

diners += %sum1%
diners += %sum2%
GuiControl, , diners, Diners= %diners%

}

Random, coordx, 600, 1000
Random, coordy, 1, 500
GuiControl Move, cunill, x%coordx% y%coordy%
GuiControl Move, cabra, x%coordx% y%coordy%
GuiControl Move, drac, x%coordx% y%coordy%
goto moviment

clik1:
diners += 100
cofre += 1
Random, numrand, 1,3
SoundPlay *64
;anticGuiControl, show, cofre
GuiControl, , hist,  has caçat un cunill i has guanyat 100$ i has desblokejat 1 cofre normal jajaja
numcofre1 += 1
goto %numcofre1%
clik2:
diners += 200
cofre += 1
Random, numrand, 1,3
SoundPlay *64
;anticGuiControl, show, cofre
GuiControl, , hist, has caçat una cabra, has guanyat 200$ i has desblokejat 1 cofre bo jajaja
numcofre2 += 1
goto %numcofre2%
clik3:
diners += 500
cofre += 1
SoundPlay *64
;anticGuiControl, show, cofre
GuiControl, , hist, Moltbe has caçat el drac i has guanyat 500$ i has desblokejat 1 cofre molt bo jajaja
numcofre3 += 1
goto %numcofre3%




random:


Random, numrand, 1,3
if numrand = 1
goto cunill
if numrand = 2 
goto cabra
if numrand = 3
goto drac
return


cunill:
GuiControl, hide, cabra
GuiControl, hide, drac
GuiControl, show, cunill
;Random, numcofre1, 1,2
;numcofre1 += 1
;goto %numcofre1%
;if numcofre = 1
;goto 1
;if numcofre = 2
;goto 2
goto moviment


cabra:
GuiControl, hide, cunill
GuiControl, hide, drac
GuiControl, show, cabra
;Random, numcofre2, 11,22
;numcofre2 += 1
;goto %numcofre2%
;if numcofre = 1
;goto 1
;if numcofre = 2
;goto 2
goto moviment


drac:
GuiControl, hide, cabra
GuiControl, hide, cunill
GuiControl, show, drac
;Random, numcofre3, 111,222
;numcofre3 += 1
;goto %numcofre3%
;if numcofre = 1
;goto 1
;if numcofre = 2
;goto 2
goto moviment

mina: 
diners += %mlvl% 
return 



m_mina:
if diners > %millorar_mina% 
goto millorarMina

if diners = %millorar_mina% 
goto millorarMina

if diners < %millorar_mina% 
goto no



millorarMina:
diners -= %millorar_mina% 
mlvl += 1 
millorar_mina += 10 ;diners ke sumen preu millorar mina
GuiControl, , mina, mina lvl %mlvl%
GuiControl, , m_mina, millorar mina costa %millorar_mina%
GuiControl, , hist, Mina millorada al nivell %mlvl%
return

no:
GuiControl, , hist, Actualment ets un desgraciat de m4rd4 i no tens diners, treballa rata
return

desmin1:

if diners > %desmin1% 
goto desminador1

if diners = %desmin1% 
goto desminador1

if diners < %desmin1% 
goto no

desminador1:
diners -= %desmin1%
sum1 += 0.1
su1 += 1
GuiControl, hide, desmin1
Gui, Add, Button,  x50 y300 vmin1, minador1 produieix %su1%$/s 
Gui, Add, Button, gm_min1 x50 y340 vm_min1, %m_min1%$ per millorar
GuiControl, , hist, has desblokejat el minador 1
return

m_min1:

if diners > %m_min1% 
goto m_mina1

if diners = %m_min1% 
goto m_mina1

if diners < %m_min1% 
goto no

m_mina1:
diners -= %m_min1%
m_min1 += 50
sum1 += 0.1
su1 += 1
GuiControl, , min1, produieix %su1%$/s 
GuiControl, , m_min1, %m_min1%$ per millorar
GuiControl, , hist, minador 1 millorat al nivell %su1%
return


desmin2:

if diners > %desmin2% 
goto desminador2

if diners = %desmin2% 
goto desminador2

if diners < %desmin2% 
goto no

desminador2:
diners -= %desmin2%
sum2 += 1
GuiControl, hide, desmin2
Gui, Add, Button,  x300 y300 vmin2, min2 produieix %sum2%0$/s 
Gui, Add, Button, gm_min2 x300 y340 vm_min2, %m_min2%$ per millorar
GuiControl, , hist, has desbloquejat el minador 2
return

m_min2:

if diners > %m_min2% 
goto m_mina2

if diners = %m_min2% 
goto m_mina2

if diners < %m_min2% 
goto no

m_mina2:
diners -= %m_min2%
m_min2 += 500
sum2 += 1
GuiControl, , min2, produieix %sum2%0$/s 
GuiControl, , m_min2, %m_min2%$ per millorar
GuiControl, , hist, minador 2 millorat al nivell %sum2%
return


cofre:
GuiControl, , hist, el cofre sobrira en 5s
setTimer, temps, 5000
goto moviment

temps:
GuiControl, , hist, has obert el cofre satisfacoriament i sa sumat 300$
diners += 300
GuiControl, hide, cofre
goto moviment



;xc = 470
;yc = 30




1:
Gui, Add, Button, g1a x%xc% y%yc%  v1  , cofre
;xc += 50
yc += 50
goto random

1a:
setTimer, temps1, 5000
GuiControl, , hist, el cofre sobrira en 5s
goto moviment

temps1:
Random, rec1, 100, 200
GuiControl, , hist, has obert el cofre satisfacoriament i sa sumat %rec1%$ 1
diners += %rec1%
GuiControl, hide, 1
goto moviment

2:
Gui, Add, Button, g2a x%xc% y%yc%  v2 , cofre
;xc += 50
yc += 50
goto random

2a:
setTimer, temps2, 5000
GuiControl, , hist, el cofre sobrira en 5s
goto moviment


temps2:
Random, rec1, 100, 200
GuiControl, , hist, has obert el cofre satisfacoriament i sa sumat %rec1%$ 2
diners += %rec1%
GuiControl, hide, 2
goto moviment





10:
Gui, Add, Button, g10a x%xc% y%yc%   v10 , cofre
;xc += 50
yc += 50
goto random

10a:
setTimer, temps10, 10000
GuiControl, , hist, el cofre sobrira en 10s
goto moviment

temps10:
Random, rec2, 500, 700
GuiControl, , hist, has obert el cofre satisfacoriament i sa sumat %rec2%$ 10
diners += %rec2%
GuiControl, hide, 10
goto moviment

11:
Gui, Add, Button, g11a x%xc% y%yc%  v11 , cofre
;xc += 50
yc += 50
goto random

11a:
setTimer, temps11, 10000
GuiControl, , hist, el cofre sobrira en 10s
goto moviment


temps11:
Random, rec2, 500, 700
GuiControl, , hist, has obert el cofre satisfacoriament i sa sumat %rec2%$ 11
diners += %rec2%
GuiControl, hide, 11
goto moviment


20:
Gui, Add, Button, g20a x%xc% y%yc%  v20  , cofre
;xc += 50
yc += 50
goto random

20a:
setTimer, temps20, 15000
GuiControl, , hist, el cofre sobrira en 15s
goto moviment

temps20:
Random, rec3, 800, 1000
GuiControl, , hist, has obert el cofre satisfacoriament i sa sumat %rec3%$ 20
diners += %rec3%
GuiControl, hide, 20
goto moviment

21:
Gui, Add, Button, g21a x%xc% y%yc% v21  , cofre
;xc += 50
yc += 50
goto random

21a:
setTimer, temps21, 15000
GuiControl, , hist, el cofre sobrira en 15s
goto moviment


temps21:
Random, rec3, 800, 1000
GuiControl, , hist, has obert el cofre satisfacoriament i sa sumat %rec3%$ 21
diners += %rec3%
GuiControl, hide, 21
goto moviment


;millorar el msg no surti en msg i mirar si es pt rearmar el timer, quan superen els 10k $ num es torna invisible
; fer ke el cofre sigui random amb num random o si sumant 1 num si les entrades ja stan fetes funciona
; separar num rand 1-x x-y y-z x cada animal i fer un interval de lo ke guanya cada cofre
;dona el cofre del seguent!!
;poder no es el timer ke peta el 2n cop dl mateix buto no fa



GuiClose:
ExitApp

Esc::ExitApp