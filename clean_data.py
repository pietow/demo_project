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
r = re.compile("\d{5}")
for i, value in df_dealer.iteritems():
    new = value.split(' ')
    slice_ = new.index('\n')
    name_list.append(' '.join(new[:slice_]))
    plz_list.append(list(filter(r.match, new))[0])
    ort_list.append(new[-6])
    
dict_dealer = {'Autohaus': name_list, 'PLZ': plz_list}
#list(filter(None, i_list)) 
df_dealer = pd.DataFrame(dict_dealer)
df_dealer.to_csv('clean_bmw.csv', index=False)


# %%
df_plz = pd.read_csv("PLZ.csv", sep=';',names=['id', 'Ort', 'Longitude', 'Latitude'], header=None)

def convert(place):
    if 'Ã¼' in place:
        conv_pla = list(map(lambda x: x if x != '¼' else 'ü', place))
        return ''.join(conv_pla)
    elif 'Ã¶' in place:
        conv_pla = list(map(lambda x: x if x != '¶' else 'ö', place))
        return ''.join(conv_pla)
    elif 'ÃŸ' in place:
        conv_pla = list(map(lambda x: x if x != 'Ÿ' else 'ß', place))
        return ''.join(conv_pla)
    elif 'Ã¤' in place:
        conv_pla = list(map(lambda x: x if x != '¤' else 'ä', place))
        return ''.join(conv_pla)
    else:
        return place

def remove_A(place):
    if 'Ã' in place:
        conv_pla = list(map(lambda x: x, place))
        conv_pla.pop(conv_pla.index('Ã'))
        return ''.join(conv_pla)
    else:
        return ''.join(conv_pla)


new = df_plz.Ort.str.replace('¼', 'ü')
new = new.str.replace('¶', 'ö')
new = new.str.replace('Ÿ', 'ß')
new = new.str.replace('¤', 'ä')
new = new.str.replace('Ã', '')
df_plz['Ort'] = new


# %%


