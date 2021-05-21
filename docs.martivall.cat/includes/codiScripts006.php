h = 0
a::
run, notepad,,, ID
WinWait, ahk_pid %ID%
Loop {
Random, h, 0,1
ControlSend, , %h%, ahk_pid %ID% 
}
return

Esc::ExitApp