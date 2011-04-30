%function C = leg_consumption(V, sc, d)
%returns the consumption on a leg given the speed V
%sea current sc and the distance d
%countercurrent should be negative

function C = leg_consumption(V, sc, d)

  %time T spent on the leg
  T = d/(V+sc);

  %consumption, table values are in tons/day
  C = T * bunkertable(V) / 24;

endfunction