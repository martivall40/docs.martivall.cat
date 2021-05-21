SetKeyDelay -1, -1 ; Això es perque envii les tecles més ràpid
Gui, Font, cFFFFFF ; definim color d la lletra amb exadecimal
Gui, Font, s12, Verdana  ;tipus de font
Gui, Add, Text,   x300 y25  , * Ajustes ;aixo es decoratiu i per posiblesampliacions
Gui, Font, s11, Verdana
Gui, Add, Checkbox, right x400 y50 h50  vchekbox, Mode avançat: ;ara mateix aixo no està posat que faci res
Gui, Add, Text, x30 y70 w250, Introduïr el numero de cops que vols enviar el contingut 
Gui, Font, c000000
Gui, Add, Edit, x30 y110 w250 h30 r1 vnum Center, 1 
;F2
Gui, Font, cFFFFFF
Gui, Font, s14, Verdana
Gui, Add, Edit, x30 y170 w50 h30 r1 Center hwndQF2  Center, F2  ;aixo es un quadre de text que posa F2
CtlColor_Edit(QF2, 0x0000FF, 0x0FFFFFF)  ;això es especial... canvia el color de fons del text, normalment no es pot fer aixo per aixo avaig e tot hi ha una ampliació per poder posar mes colors
Gui, Font, c000000
Gui, Add, Edit, x80 y170 w200 h30 vF2 r1 Center, ;aqui s'almacena en una variable lo que poses en el text
;F3
Gui, Font, cFFFFFF
Gui, Font, s14, Verdana
Gui, Add, Edit, x30 y220 w50 h30 r1 Center hwndQF3  Center, F3
CtlColor_Edit(QF3, 0x0000FF, 0x0FFFFFF)
Gui, Font, c000000
Gui, Add, Edit, x80 y220 w200 h30 vF3 r1 Center 
;F4
Gui, Font, cFFFFFF
Gui, Font, s14, Verdana
Gui, Add, Edit, x30 y270 w50 h30 r1 Center hwndQF4  Center, F4
CtlColor_Edit(QF4, 0x0000FF, 0x0FFFFFF)
Gui, Font, c000000
Gui, Add, Edit, x80 y270 w200 h30 vF4 r1 Center 
;F6
Gui, Font, cFFFFFF
Gui, Font, s14, Verdana
Gui, Add, Edit, x30 y320 w50 h30 r1 Center hwndQF6  Center, F6
CtlColor_Edit(QF6, 0x0000FF, 0x0FFFFFF)
Gui, Font, c000000
Gui, Add, Edit, x80 y320 w200 h30 vF6 r1 Center 
;F7
Gui, Font, cFFFFFF
Gui, Font, s14, Verdana
Gui, Add, Edit, x30 y370 w50 h30 r1 Center hwndQF7  Center, F7
CtlColor_Edit(QF7, 0x0000FF, 0x0FFFFFF)
Gui, Font, c000000
Gui, Add, Edit, x80 y370 w200 h30 vF7 r1 Center 
;F8
Gui, Font, cFFFFFF
Gui, Font, s14, Verdana
Gui, Add, Edit, x330 y170 w50 h30 r1 Center hwndQF8  Center, F8
CtlColor_Edit(QF8, 0x0000FF, 0x0FFFFFF)
Gui, Font, c000000
Gui, Add, Edit, x380 y170 w200 h30 vF8 r1 Center
;F9
Gui, Font, cFFFFFF
Gui, Font, s14, Verdana
Gui, Add, Edit, x330 y220 w50 h30 r1 Center hwndQF9  Center, F9
CtlColor_Edit(QF9, 0x0000FF, 0x0FFFFFF)
Gui, Font, c000000
Gui, Add, Edit, x380 y220 w200 h30 vF9 r1 Center
;F10
Gui, Font, cFFFFFF
Gui, Font, s14, Verdana
Gui, Add, Edit, x330 y270 w50 h30 r1 Center hwndQF10  Center, F10
CtlColor_Edit(QF10, 0x0000FF, 0x0FFFFFF)
Gui, Font, c000000
Gui, Add, Edit, x380 y270 w200 h30 vF10 r1 Center
;F11
Gui, Font, cFFFFFF
Gui, Font, s14, Verdana
Gui, Add, Edit, x330 y320 w50 h30 r1 Center hwndQF11  Center, F11
CtlColor_Edit(QF11, 0x0000FF, 0x0FFFFFF)
Gui, Font, c000000
Gui, Add, Edit, x380 y320 w200 h30 vF11 r1 Center 
;F12
Gui, Font, cFFFFFF
Gui, Font, s14, Verdana
Gui, Add, Edit, x330 y370 w50 h30 r1 Center hwndQF12  Center, F12
CtlColor_Edit(QF12, 0x0000FF, 0x0FFFFFF)
Gui, Font, c000000
Gui, Add, Edit, x380 y370 w200 h30 vF12 r1 Center 


Gui, color, 000000 
Gui, Show, w700 h500 , AixoDlAltreDiaProAmbAHK
;Gui, hide


F2::
Gui, Font, c000000
Gui, Submit, Nohide
Loop, %num%
{
Send %F2%
Send {Enter}
}
return

F3::
Gui, Font, c000000
Gui, Submit, Nohide
Loop, %num%
{
Send %F3%
Send {Enter}
}
return

F4::
Gui, Font, c000000
Gui, Submit, Nohide
Loop, %num%
{
Send %F4%
Send {Enter}
}
return


F6::
Gui, Font, c000000
Gui, Submit, Nohide
Loop, %num%
{
Send %F6%
Send {Enter}
}
return

F7::
Gui, Font, c000000
Gui, Submit, Nohide
Loop, %num%
{
Send %F7%
Send {Enter}
}
return

F8::
Gui, Font, c000000
Gui, Submit, Nohide
Loop, %num%
{
Send %F8%
Send {Enter}
}
return


F9::
Gui, Font, c000000
Gui, Submit, Nohide
Loop, %num%
{
Send %F9%
Send {Enter}
}
return


F10::
Gui, Font, c000000
Gui, Submit, Nohide
Loop, %num%
{
Send %F10%
Send {Enter}
}
return


F11::
Gui, Font, c000000
Gui, Submit, Nohide
Loop, %num%
{
Send %F11%
Send {Enter}
}
return


F12::
Gui, Font, c000000
Gui, Submit, Nohide
Loop, %num%
{
Send %F12%
Send {Enter}
}
return

!a::
Send %clipboard%
return

!r::
reload



GuiClose:
ExitApp



Esc::ExitApp




;Pak de colors:





; ======================================================================================================================
; WM_CTLCOLOREDIT = 0x0133 <- msdn.microsoft.com/en-us/library/windows/desktop/bb761691(v=vs.85).aspx
; An edit control that is not read-only or disabled sends the WM_CTLCOLOREDIT message to its parent window
; when the control is about to be drawn.
; ======================================================================================================================
CtlColor_Edit(Param1, Param2 := "", Param3 := "") {
   Static Init := OnMessage(0x0133, "CtlColor_Edit")
   Static DCBrush := DllCall("Gdi32.dll\GetStockObject", "UInt", 18, "UPtr") ; DC_BRUSH = 18
   Static Controls := []
   ; If Param1 contains a valid window handle, the function has been called by the user ---------------------------------
   ; Param1 = HWND, Param2 = BackgroundColor, Param3 = TextColor
   If DllCall("IsWindow", "Ptr", Param1, "UInt") {
      Controls.Delete(Param1)
      If (Param2 <> "") {
         Controls[Param1, "BkColor"] := CtlColor_BGR(Param2)
         If (Param3 <> "")
            Controls[Param1, "TxColor"] := CtlColor_BGR(Param3)
      }
   }
   ; Function has been called as message handler -----------------------------------------------------------------------
   ; Param1 (wParam) = HDC, Param2 (lParam) = HWND
   Else If (((BC := Controls[Param2, "BkColor"]) . (TC := Controls[Param2, "TxColor"])) <> "") {
      If (TC <> "")
         DllCall("SetTextColor", "Ptr", Param1, "UInt", TC)
      DllCall("SetBkColor", "Ptr", Param1, "UInt", BC)
      DllCall("SetDCBrushColor", "Ptr", Param1, "UInt", BC)
      Return DCBrush
   }
}
; ======================================================================================================================
; Color values must be passed as BGR to GDI functions, this function does the conversion from RGB
; ======================================================================================================================
CtlColor_BGR(RGB) {
   Static HTML := {AQUA: 0xFFFF00, BLACK: 0x000000, BLUE: 0xFF0000, FUCHSIA: 0xFF00FF, GRAY: 0x808080, GREEN: 0x008000
                 , LIME: 0x00FF00, MAROON: 0x000080, NAVY: 0x800000, OLIVE: 0x008080, PURPLE: 0x800080, RED: 0x0000FF
                 , SILVER: 0xC0C0C0, TEAL: 0x808000, WHITE: 0xFFFFFF, YELLOW: 0x00FFFF}
   Return (HTML.HasKey(RGB) ? HTML[RGB] : ((RGB >> 16) & 0x0000FF) + (RGB & 0x00FF00) + ((RGB & 0x0000FF) << 16))
}











