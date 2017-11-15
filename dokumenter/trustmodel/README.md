The Principles of Trust
=======================
A model, a simulation, a visualization and a set of narratives describing the effect of individuals trusting each other in a group.


The Model
---------

 * group of individuals (10) characterized by their *value* and their *honesty* (0.0 - 1.0)
 
 * each individual has a relationship to each of the other individuals, characterized by its *strength* (0.0 - 1.0)
 
 * number of iterations (100), each iteration representating an interaction between individuals

 * individual invests
  - value is multiplied during transaction
  - gets some return from honest individual, i.e. who passes the honesty test
  - loses investment from dishonest individual, i.e. fails the honesty test
  - if the honesty test fails, the trust relationship is reduced

 * investment consists of a transaction fee (legal security, overhead, inversely proportional to trust coeff) + investment


Experiments
-----------

 * does trust align with honesty? ("convergence", under which circumstances? is it optimal to be overconfident/forgiving?) Might require a continuous and symmetrical trust response function

 * how do egoists perform compared to altruists within the group? (what is an egoist and what is an altruist? - an altruist accepts a transaction that is detrimental to himself but benefial for the global value. Requires that the concept to be introduced in the model, i.e. deals that are not beneficial to the trustor)
 
 * for a given honesty coefficient (fixed for all individuals), what distinguishes a successful vs. a less successful group?
 
 * if we add a threshold for investing ("legal overhead"), how do things change?


Visualizations
--------------
 
 * total value as a function of honesty coeff [done]

 * "life paths" (values & social capital) of the top performing / lowest performing group (social capital = sum of relations * target values)
 
 * honesty vs. average trust (relationship value) as a function of iterations (or just at the end of the simulation [done])
 
 
Other ideas
-----------
 
 * life span ?

 * 2D plane?

 * pay-it-forward

 * suitable for visualization:
  - 2D geometry with relations reaching out, transfers being done, returne etc.
  - 
 
 * sometimes individual dies, value & relations removed

 * extend parameters from being coefficients to being distributions:
   - honesty coefficient / distribution
   - trust coefficient / distribution
   - transferred value multiplier / distribution 
