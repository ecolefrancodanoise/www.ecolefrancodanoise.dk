%function B = bunkertable(V)
%returns the bunker consumption B (in tons/day) as a function of 
%the speed V (in kts)

function B = bunkertable(V)

  speeds = [10 15 20 25 30];
  consumptions = [60 95 140 190 270];

  B = interp1(speeds, consumptions, V); %interpolation

endfunction
