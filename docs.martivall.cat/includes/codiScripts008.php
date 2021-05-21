; prova sumar var 4 coord

; A_ScreenWidth, A_ScreenHeight

numx := 1750
numy := 1000

; Gui, Font, s40, Verdana Arial Black 

goto bo

bo:

Loop, 15 {
Random, numx , 1, 1750
Random, numy , 1, 1000
Gui, New, hwndhGui AlwaysOnTop Resize MinSize
Gui, color, FF0000 
Gui, Font, bold, cFFFFFF, 
Gui, Add, Text, x35, ERROR!!!!
Gui, Show, x%numx% y%numy% w20 h30
Sleep 10
}

SoundPlay *64  ; despres de 15 sona soroll i torna al goto bo
goto bo
esc:ExitApp


