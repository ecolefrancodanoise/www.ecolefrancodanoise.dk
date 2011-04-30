%function C = totalconsumption(V1)
%
%returns the total bunker consumption for the voyage
%given the speed on the first leg V1
%
%the parameters of the problem are:
% total travelling time is 3h
% length of first leg is 20 nmi
% length of first leg is 30 nmi
% sea current on first leg is -2 kts
% sea current on second leg is 1 kts
%
%these parameters could/should be a part of the input
%of the problem, i.e. the function would then be
%C = totalconsumption(V1, inputparameters)


function C = totalconsumption(V1)

  C1 = leg_consumption(V1, -2, 20);

  V2 = secondspeed(V1);
  C2 = leg_consumption(V2, 1, 30);

  C = C1 + C2;

endfunction