import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import NewsArticle from './NewsArticle';

class NewsFeed extends Component {
    constructor() {
        super()

        this.state = {
            limitCountEnd: 26,
        }
    }

    loadMore = () => {
        const more = this.state.limitCountEnd += 10;
        this.setState({limitCountEnd: more})
    }

    renderArticle = (article, index) => {
        return(
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
    }

    render() {

        const { selectedCategories, categories, savedCategories } = this.props;
        const currentDate = new Date();
        let limitCounter = 1;

        return (
            <div>
                <div className="row small-collapse large-collapse"> 
                {
                    this.props.newsArticles.sort((a,b) => new Date(b.publishedAt) - new Date(a.publishedAt) )
                    .map(

                        (item, index) => {
                            const publishedAtDate = new Date(item.publishedAt);

                            if(savedCategories.length === 0 && currentDate > publishedAtDate && limitCounter <= this.state.limitCountEnd) {
                                limitCounter +=1;
                                return this.renderArticle(item, index);
                            }
                            else if (savedCategories.length > 0 && currentDate > publishedAtDate && limitCounter <= this.state.limitCountEnd) {
                                return savedCategories.map((category) => {
                                    if (category.name === item.sourceCategory) {
                                        limitCounter +=1;
                                        return this.renderArticle(item, index);
                                    }
                                });

                            }
                        })
                } 
                
                </div>
                <div className="row">
                    <button className="button success load-more" onClick={() => this.loadMore()}>Load More</button>
                </div>
            </div>
            )
    }
}



export default NewsFeed




