; sauria de posar com un pause com el bot ark 
; i el link k vols sa d tenir al control c
; i crec k els temps es poden reduir a la meitat
setkeydelay 20,20


clipboard := "posar link"     ; aixo es el control c
delay = 100


!a::
;run, chrome,,, ID
;WinWait, ahk_pid %ID%
;WinActivate, ahk_pid %ID%
Send {Control down}
b:
Loop, 10 {
Sleep delay 
Send {t}
;ControlSend,,^t, ahk_pid %ID% 
Sleep delay 
Send {v}
;ControlSend,,{Raw}%clipboard%, ahk_pid %ID% 
Sleep delay 
Send {Enter}
;ControlSend,,{Enter}, ahk_pid %ID% 
Sleep delay 

}
Sleep delay 
Send {1}
;ControlSend,,^1, ahk_pid %ID% 
Loop, 10 {
Sleep delay 
Send {w}
;ControlSend,,^w, ahk_pid %ID% 
}
goto b
return


!r::
Send {Control up}
Send {Control}
reload

!Esc::
Send {Control up}
Send {Control}
ExitApp