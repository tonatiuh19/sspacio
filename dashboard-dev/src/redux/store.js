import {createStore, combineReducers, compose, applyMiddleware} from 'redux'
import thunk from 'redux-thunk'
import spacesReducer, {getSpacesAction} from './spacesDuck'

const rootReducer = combineReducers({
    spaces: spacesReducer
})

const composeEnhancers = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ || compose;

export default function generateStore(){
    let store = createStore(rootReducer, composeEnhancers(applyMiddleware(thunk)))
    getSpacesAction("test@gmail.com")(store.dispatch, store.getState)
    return store
}