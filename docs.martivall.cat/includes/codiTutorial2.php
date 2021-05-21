;primer definim les variables
presentacio = Molt bon dia.
presentacio2 = aixo es un exemple de enviar text en un sol proces.

!b::
run, notepad,,, ID
WinWait, ahk_pid %ID%
send %presentacio% ;aixi es com es posen les variables
send {enter} ;aixo prem la tecla del tecla que li diguis.
ControlSend, , %presentacio2%, ahk_pid %ID% 
send {enter}
;Sleep 100 ;aixo posa una pausa al script, normalment s'ha de posar perque hi hagu un marge de temps entre processos i l'ordinador li doni temps de reproduir-los correctament
send, aixo prem tecles directament.

return


!a::
msgbox, Hola Món!
return
Esc::ExitApp

!r::
reload


