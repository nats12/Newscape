import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { CSSTransitionGroup } from 'react-transition-group';
import NewsArticle from './NewsArticle';


class NewsFeed extends Component {
    constructor() {
        super()

        this.state = {
            limitCountEnd: 26,
        }
    }

    loadMore = () => {
        if (this.state.limitCountEnd < this.props.newsArticles.length) {
            const more = this.state.limitCountEnd += 20;
            this.setState({limitCountEnd: more})
        }
    }

    filterCategory = (articles) => {

        return articles.filter((article) => {

            let ok = false;

            this.props.selectedCategories.map((category) => {
                if (category.name === article.sourceCategory){
                    ok = true;
                }
            })

            return ok;
        })
    }


    filterLanguage = (articles) => {

        return articles.filter((article) => {

            let ok = false;

            this.props.selectedLanguages.map((language) => {
                if (language.iso === article.sourceLanguage){
                    ok = true;
                }
            })

            return ok;
        })
    }

    filterSource = (articles) => {

        return articles.filter((article) => {

            let ok = false;

            this.props.selectedSources.map((source) => {
                if (source.source_id === article.sourceId){
                    ok = true;
                }
            })

            return ok;
        })
    }

    renderArticle = (articles) => {

        const {selectedCategories, selectedLanguages, selectedSources} = this.props;

        let filtered = articles;

        if (selectedCategories.length > 0) {
            filtered = this.filterCategory(filtered);
        }

        if (selectedLanguages.length > 0) {
            filtered = this.filterLanguage(filtered);
        }

        if (selectedSources.length > 0) {
            filtered = this.filterSource(filtered);
        }

        return(

            filtered.map( (article, index) =>
                <NewsArticle 
                    key={index} 
                    newsArticle={article} 
                    dateFormatter={this.props.dateFormatter} 
                    tweetFormOpen={this.props.tweetFormOpen} 
                    toggleTweetForm={this.props.toggleTweetForm}
                    selectArticle={this.props.selectArticle}
                    user={this.props.user}
                />

            )
        )
    }

    render() {

        const { selectedCategories, categories, savedCategories } = this.props;
        const currentDate = new Date();
        let limitCounter = 1;

        return (
            <div>
                <div className="row small-collapse large-collapse"> 

                {
                    this.renderArticle(this.props.newsArticles)
                }
                
                </div>
                <div className="row">
                    <button 
                        className="button success load-more" 
                        onClick={() => this.loadMore()} 
                        disabled={this.state.limitCountEnd >= this.props.newsArticles.length ? true : false}
                    >
                        Load More
                    </button>
                </div>
            </div>
            )
    }
}



export default NewsFeed

// {
//     this.props.newsArticles.sort((a,b) => new Date(b.publishedAt) - new Date(a.publishedAt) )
//     .map(

//         (item, index) => {
//             const publishedAtDate = new Date(item.publishedAt);

//             if(selectedCategories.length === 0 && currentDate > publishedAtDate && limitCounter <= this.state.limitCountEnd) {
//                 limitCounter +=1;
//                 return this.renderArticle(item, index);
//             }
//             else if (selectedCategories.length > 0 && currentDate > publishedAtDate && limitCounter <= this.state.limitCountEnd) {
//                 return selectedCategories.map((category) => {
//                     if (category.name === item.sourceCategory) {
//                         limitCounter +=1;
//                         return this.renderArticle(item, index);
//                     }
//                 });

//             }
//         })
// } 




