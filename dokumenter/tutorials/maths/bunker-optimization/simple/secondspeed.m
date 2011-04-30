%function  V2 = secondspeed(V1)
%returns the speed on the second leg given the speed on the first one
%given that
% total travelling time is 3h
% length of first leg is 20 nmi
% length of first leg is 30 nmi
% sea current on first leg is -2 kts
% sea current on second leg is 1 kts
%
%Note: all the parameters above could/should be given as input to the
%function 


function  V2 = secondspeed(V1)

  %isolating V2 from 3h = 20/(V1-2) + 30/(V2+1)
  %gives
  V2 = 30/(3 - 20/(V1-2)) - 1;

endfunction