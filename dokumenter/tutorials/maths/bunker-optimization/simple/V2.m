%function secondspeed = V2(V1)
%returns the speed on the second leg given the speed on the first one

function secondspeed = V2(V1)

  %isolating seconspeed from 3h = 20/(V1-2) + 30/(secondspeed+1)
  %gives
  secondspeed = 30/(3 - 20/(V1-2)) - 1

endfunction