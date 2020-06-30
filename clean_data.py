# To add a new cell, type '# %%'
# To add a new markdown cell, type '# %% [markdown]'
# %%
import pandas as pd
import re

data = pd.read_csv("bmw.csv")
df_dealer = data.Dlodealer
df_dealer

def get_index_street(list_, str_, i):
    #str_ = 'Straße'
    if str_ in new:
        index = list_.index(str_)
        #print(i,index, list_[index])
        return (i, list_[index])

def get_index_street_first(list_, str_, i):
    tuple_ = [(i, word) for i, word in enumerate(list_) if str_ in word and word!='Autohaus' and word!='Oberhausen' and word!='Langenfeld' and word!='Holsterhauser' and word!='Recklinghausen' and word!='Eichenhofer']
    if tuple_:
        #print(i, tuple_)
        return (i, list_[:tuple_[0][0]])

name_list = []
plz_list = []
ort_list = []  
i_list = []
r = re.compile("\d{5}")
for i, value in df_dealer.iteritems():
    new = value.split(' ')
    slice_ = new.index('\n')
    name_list.append(' '.join(new[:slice_]))
    plz_list.append(list(filter(r.match, new))[0])
    ort_list.append(new[-6])
    
    i_list.append(get_index_street(new, 'Straße',i))
    i_list.append(get_index_street(new, 'Str.', i))
    i_list.append(get_index_street(new, 'Allee', i))
    i_list.append(get_index_street(new, 'Weg', i))
    i_list.append(get_index_street(new, 'Hämmern', i))
    i_list.append(get_index_street(new, 'Damm', i))
    i_list.append(get_index_street_first(new, 'str.', i))
    i_list.append(get_index_street_first(new, 'ring', i))
    i_list.append(get_index_street_first(new, 'weg', i))
    i_list.append(get_index_street_first(new, 'haus', i))
    i_list.append(get_index_street_first(new, 'feld', i))
    i_list.append(get_index_street_first(new, 'heide', i))
    i_list.append(get_index_street_first(new, '-Str.', i))
    i_list.append(get_index_street_first(new, 'St.', i))
    i_list.append(get_index_street_first(new, 'Boulevard', i))
    i_list.append(get_index_street_first(new, 'Im', i))
    i_list.append(get_index_street_first(new, 'Zum', i))
    i_list.append(get_index_street_first(new, 'hof', i))
    i_list.append(get_index_street_first(new, 'straße', i))

#list(filter(None, i_list)) 
name_list, plz_list, ort_list


# %%


