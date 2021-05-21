#SingleInstance Ignore
SetBatchLines, -1


secure:
Menu, Tray, NoStandard
Menu, Tray, Add, Exit, GuiEscape
Menu, Tray, Default, Exit
;BlockInput, MouseMove
InputBox, uName, User`?, Enter your USERNAME
If uName = browse
{
  	InputBox, uPass, pass`?, Enter your PASSWORD, HIDE
}
Else
{
    Msgbox, 48, Error, Incorrect USERNAME
    Reload
}


If uPass = go
  	Gosub, allow
Else
{
  Msgbox, 48, Error, Incorrect PASSWORD
  Reload
}

GuiEscape:
ExitApp
return

Esc::ExitApp

allow:
;BlockInput, MouseMoveOff
msgbox, heu entrat
ExitApp
Return